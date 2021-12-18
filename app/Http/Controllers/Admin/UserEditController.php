<?php

namespace App\Http\Controllers\admin;

use Auth;
use Session;
use Validator;
use DB;
use App\Administrator;
use App\ExamineeList;
use App\ExamineeRecord;
use App\ExamineeDetailRecord;
use App\ExamineeInformation;
use App\SearchCondition;
use App\TestInformation;
use App\TestSiteInformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class UserEditController extends Controller
{
    function init(Request $request)
    {
        $examineeId = $request->get('editExamineeId');
        $rec = ExamineeList::where('examinee_id', $examineeId)->first();
        $data = new ExamineeDetailRecord($rec['examinee_id'], $rec['password'], $rec['country'], $rec['city'], $rec['test_day'], $rec['level'], $rec['name'], $rec['payment_done'], $rec['picture_source'], $rec['birthDay'], $rec['gender'], $rec['country_ad'], $rec['address'], $rec['zipcode'], $rec['email']);
      
        return view('admin/editExaminee', ['data' => $data]);
    }

    function regist(Request $request)
    {
        $examineeId = $request->get('examineeId');
        $name = $request->get('name');
        $paymentDone = $request->get('payment');
        $birthday = $request->get('birthDay');
        $gender = $request->get('gender');
        $country = $request->get('countryAd');
        $address = $request->get('address');
        $zipcode = $request->get('zipcode');
        $email = $request->get('email');
        $file = $request->file('image');
        if ($request->hasFile('image'))
        {

            $folderIdId = Config::get('constants.folderGoogleDrive.folderId');

            $testPlace = substr($examineeId,6,3);
            $query = TestSiteInformation::where('test_site', $testPlace);
            $testPlaceCountryName = $query->value('country');
            $testPlaceCityName = $query->value('city');

            $testPlaceFolderId = static::uploadPictureGoogleDriveService($testPlaceCountryName,$folderIdId);
            $testPlaceCityFolderId = static::uploadPictureGoogleDriveService($testPlaceCityName,$testPlaceFolderId);

            $monthOfTest = static::getFolderMonth($examineeId);
            $MonthFolderId = static::uploadPictureGoogleDriveService($monthOfTest,$testPlaceCityFolderId);
            $dayOfTest = substr($examineeId,4,2);
            $dayFolderId = static::uploadPictureGoogleDriveService($dayOfTest,$MonthFolderId);

            $optParams = array(
                'pageSize' => 1,
                'fields' => 'nextPageToken, files(contentHints/thumbnail,fileExtension,id,name,size)',
                'q' =>"name contains '".$examineeId."' AND '".$dayFolderId."' in parents"
              );
            $client = Storage::disk('google');
            $serviceGoogleDrive = new \Google_Service_Drive($client);
            $results = $serviceGoogleDrive->files->listFiles($optParams);

            if (count($results->getFiles()) !== 0) {
                $filesReturn = $results->getFiles();
                $resultFirst = reset($filesReturn);
                $imageId = $resultFirst->getId();
                $serviceGoogleDrive->files->delete($imageId);
            }

            $fileUpload = new \Google_Service_Drive_DriveFile();
            $fileUpload->setName($examineeId.".".$file->getClientOriginalExtension());
            $fileUpload->setParents([$dayFolderId]);

            $fileUpload->setDescription('replacement picture for ID '.$examineeId);

            $data = file_get_contents($file->getRealPath());

            $result = $serviceGoogleDrive->files->create($fileUpload, array(
                'data' => $data,
                'uploadType' => 'media'
            ));

        $imagePath = $testPlaceCountryName."/".$testPlaceCityName."/".$monthOfTest."/".$dayOfTest;
        $currentPaymentStatus = ExamineeInformation::where('examinee_id', $examineeId)->first()->payment_done;
        ExamineeInformation::where('examinee_id', $examineeId)->update([
            'name' => $name,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'zipcode' => $zipcode,
            'country' => $country,
            'email' => $email,
            'payment_done' => $paymentDone,
            'picture_source' => $imagePath
        ]);
        }
        else {
            $currentPaymentStatus = ExamineeInformation::where('examinee_id', $examineeId)->first()->payment_done;
            ExamineeInformation::where('examinee_id', $examineeId)->update([
            'name' => $name,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'zipcode' => $zipcode,
            'country' => $country,
            'email' => $email,
            'payment_done' => $paymentDone
        ]);
        }
        if ($paymentDone != $currentPaymentStatus)
            {
                static::updateGoogleSheet($examineeId,$paymentDone);
            }
        $condition = Session::get('ExamineeListCondition');
        $condition->setAutoSearch(1);
        $list = [];
        return view('admin/examineeList', ['data' => $list, 'condition' => $condition]);

    }

    function updateGoogleSheet($examineeId,$paymentDone){
        $colorFlag = $paymentDone;
        $examineeTestPlaceInformation = TestInformation::where('examinee_id',$examineeId)->first();
        $country = $examineeTestPlaceInformation->country;
        $city = $examineeTestPlaceInformation->city;
        $testDay = $examineeTestPlaceInformation->test_day;
        $folderIdId = "17maGhmM39WIGuzr3GarcMJbtKLeXpLsJ";
        $optParams = array(
            'pageSize' => 1,
            'fields' => 'nextPageToken, files(contentHints/thumbnail,fileExtension,id,name,size)',
            'q' =>"name contains '".$country."' AND '".$folderIdId."' in parents"
          );
          $client = Storage::disk('google');
          $serviceGoogleDrive = new \Google_Service_Drive($client);
          $results = $serviceGoogleDrive->files->listFiles($optParams);
        if (count($results->getFiles()) == 0) {
            print "No files found.\n";
        } else {
            foreach ($results->getFiles() as $file) {
                $countryId = $file->getId();
                $optParams = array(
                    'pageSize' => 1,
                    'fields' => 'nextPageToken, files(contentHints/thumbnail,fileExtension,id,name,size)',
                    'q' =>"name contains '".$city."' AND '".$countryId."' in parents"
                  );
        
                  $results = $serviceGoogleDrive->files->listFiles($optParams);
                  if (count($results->getFiles()) == 0) {
                    print "No files found.\n";
                    } else {
                    foreach ($results->getFiles() as $testPlaceFile) {
                        $spreadSheetId = $testPlaceFile->getId();
                        $spreadSheetName = str_replace("-","/",$testDay);
                        $serviceGoogleSheet = new \Google_Service_Sheets($client);
                        $sheets  = $serviceGoogleSheet->spreadsheets->get($spreadSheetId, ["fields" => "sheets(properties)"])->getSheets();

                        $obj = array();
                        foreach ($sheets as $i => $sheet) {
                            $property = $sheet -> getProperties();
                            $obj[$property -> getTitle()] = $property -> getSheetId();

                        }
                        $determineCellChangeColor = static::findCellToChange($examineeId);
                        $sheetId = $obj[$spreadSheetName];
                        $requests = [
                            new \Google_Service_Sheets_Request([
                                'repeatCell' => [
                                    'cell' => [
                                        'userEnteredFormat' => [
                                            "horizontalAlignment" => "CENTER",
                                            'textFormat' => [
                                                "foregroundColor" => [
                                                    "red" => $colorFlag,
                                                    "green" => 0,
                                                    "blue"=> 0
                                                ],
                                                "bold"=>true
                                            ]
                                        ]
                                    ],
                                    'range' => [
                                        'sheetId' => $sheetId,  
                                        'startRowIndex' => $determineCellChangeColor[0], //11,13...
                                        'endRowIndex' => $determineCellChangeColor[0]+2,
                                        'startColumnIndex' => $determineCellChangeColor[1],// 1,5,9 - 1,2,3
                                        'endColumnIndex' => $determineCellChangeColor[1]+5
                                    ],
                                    'fields' => 'userEnteredFormat(horizontalAlignment,textFormat)'
                                ]
                            ])
                        ]; 
                        $batchUpdateRequest = new \Google_Service_Sheets_BatchUpdateSpreadsheetRequest([
                            'requests' => $requests
                        ]);
                        $response = $serviceGoogleSheet->spreadsheets->batchUpdate($spreadSheetId,
                            $batchUpdateRequest);
                    }
                }
            }
        }
    }

    function findCellToChange($examineeId){
        $testTimeSlot = substr($examineeId,10,2) + 0;
        $testComputerNumber = substr($examineeId,12,2) + 0;
        // return index of row and column changing
        $columnIndex;
        switch ($testTimeSlot) {
            case 1:
                $columnIndex = 1;
                break;
            case 2:
                $columnIndex = 6;
                break;
            case 3:
                $columnIndex = 11;
                break;
        }
        $rowIndex = 8+$testComputerNumber*2;
        return [$rowIndex,$columnIndex];
    }

    function picture(Request $request){
        $examineeId = $request->get('id');
        $folderIdId = Config::get('constants.folderGoogleDrive.folderId');

        $testPlace = substr($examineeId,6,3);
        $query = TestSiteInformation::where('test_site', $testPlace);
        $testPlaceCountryName = $query->value('country');
        $testPlaceCityName = $query->value('city');

        $testPlaceFolderId = static::getInformationFromGoogleDrive($testPlaceCountryName,$folderIdId);
        $testPlaceCityFolderId = static::getInformationFromGoogleDrive($testPlaceCityName,$testPlaceFolderId);

        $monthOfTest = static::getFolderMonth($examineeId);
        $MonthFolderId = static::getInformationFromGoogleDrive($monthOfTest,$testPlaceCityFolderId);
        $dayOfTest = substr($examineeId,4,2);
        $dayFolderId = static::getInformationFromGoogleDrive($dayOfTest,$MonthFolderId);
        $examineeIdTest = $examineeId;

        // $dayFolderId = "1WmheojMvuPjcl80keWWTg7Nq5kB4iBVI";
        // $examineeIdTest = "20072944050201";
        $examineeIdTest = $examineeId;
        $optParams = array(
            'pageSize' => 1,
            'fields' => 'nextPageToken, files(contentHints/thumbnail,fileExtension,id,name,size)',
            'q' =>"mimeType contains 'image/' AND name contains '".$examineeIdTest."' AND '".$dayFolderId."' in parents"
          );

        $client = Storage::disk('google');
        $serviceGoogleDrive = new \Google_Service_Drive($client);
        $results = $serviceGoogleDrive->files->listFiles($optParams);
        if (count($results->getFiles()) == 0) {
            return back()->with('error', 'Picture not found in database. Please contact receptionist.');
        } else {
            $filesReturn = $results->getFiles();
            $resultFirst = reset($filesReturn);
            $imageId = $resultFirst->getId();
            return view('admin/examPicture', ['imageId'=>$imageId]);
        }
    }
    
    function getFolderMonth($id){
        $monthTest = substr($id,2,2);
        switch ($monthTest) {
            case "01":
                $monthTest = "1";
                break;
            case "02":
                $monthTest = "2";
                break;
            case "03":
                $monthTest = "3";
                break;
            case "04":
                $monthTest = "4";
                break;
            case "05":
                $monthTest = "5";
                break;
            case "06":
                $monthTest = "6";
                break;
            case "07":
                $monthTest = "7";
                break;
            case "08":
                $monthTest = "8";
                break;
            case "09":
                $monthTest = "9";
                break;
            default:
                $monthTest = $monthTest;
        }
        return $monthTest;
    }

    function getInformationFromGoogleDrive($childrenName,$parentFolderId){
        $optParams = array(
            'pageSize' => 1,
            'q' =>"name contains '".$childrenName."' AND '".$parentFolderId."' in parents"
          );
          $client = Storage::disk('google');
          $serviceGoogleDrive = new \Google_Service_Drive($client);
          $results = $serviceGoogleDrive->files->listFiles($optParams);
        //   if($childrenName ==="DANANG")
        //       dd($results->getFiles());
        if (count($results->getFiles()) == 0) {
            return back()->with('error', 'Picture not found in database. Please contact receptionist.');
        } else {
            $filesReturn = $results->getFiles();
            $resultFirst = reset($filesReturn);
            $imageId = $resultFirst->getId();
            return $imageId;
        }
    }

    function uploadPictureGoogleDriveService($childrenName,$parentFolderId){
        $optParams = array(
            'pageSize' => 1,
            'q' =>"name contains '".$childrenName."' AND '".$parentFolderId."' in parents"
          );
          $client = Storage::disk('google');
          $serviceGoogleDrive = new \Google_Service_Drive($client);
          $results = $serviceGoogleDrive->files->listFiles($optParams);
        if (count($results->getFiles()) == 0) {
            $fileMetadata = new \Google_Service_Drive_DriveFile(array(
                'name' => $childrenName,
                'mimeType' => 'application/vnd.google-apps.folder',
                'supportsAllDrives' => true,
                'parents' => [$parentFolderId]
            ));
            $result = $serviceGoogleDrive->files->create($fileMetadata, array(
                'fields' => 'id'));
            return $result->id;
        } else {
            $filesReturn = $results->getFiles();
            $resultFirst = reset($filesReturn);
            $imageId = $resultFirst->getId();
            return $imageId;
        }
    }
}

?>