<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\Input;
use DB;

class postsController extends Controller
{

    public function Index (){
        $post=DB::select('Select * from flights Order by FlightName');
        return view('pages.flightIndex')->with('post',$post);
    }

    public function RegisterPage(){
        return View ('/pages/uRegister');
    }

    public function RegConfirm(Request $request){
        $validatedData=$request->validate(
            [   'Username' => 'required', 'Password' => 'required', 'fName' => 'required',
            'lName' => 'required','Email' => 'required', 'Contact' => 'required',
            'Card' => 'required' ]  
            );
        $Username = $request->input('Username');
        $Password = $request->input('Password');
        $fName = $request->input('fName');
        $lName = $request->input('lName');
        $Email = $request->input('Email');
        $Contact = $request->input('Contact');
        $Card = $request->input('Card');

        $TableUsers=DB:: table('users')->where('userName', $Username)->value('userName');
        if($Username!=$TableUsers){        
            
            $data= array('userName'=>$Username, 'password'=>$Password,'fName'=>$fName,'lName'=>$lName,
            'email'=>$Email,'contactNo'=>$Contact,'travelCount'=>0,'registeredOn'=> NULL,
            'CardNo'=>$Card);//ATTRIBUTE NAME
            DB::table('users')->insert($data); //TABLE NAME
            return View('pages/RegNotify');        }
        else {
            return View('pages/RegFail');  
        }
        
    }

/* TRAVEL COUNT CALCULATION
    $takeUserName=DB:: table('tempuser')->where('indexNo', 1)->value('userName');
    $Taketravelcount=DB:: table('users')->where('userName', $takeUserName)->value('travelCount'); */

    public function showHome(){ 
        $getTempName=DB:: table('tempuser')->where('indexNo', 1)->value('tempfName');

        $getTempDistrict=DB:: table('tempdistrict')->where('indexNo', 1)->value('DistrictName'); //ACCESS Temp District
        $getDistrictFlight=DB:: table('flights')->where('FromLoc', $getTempDistrict)->get();
        return view('welcome')->with('getTempName',$getTempName)->with('getDistrictFlight', $getDistrictFlight);
    }

    public function showAdminWelcome(){
        return View('AdminWelcome');
    }

    public function ShowUserFlights(){
        //$district=DB::select('Select DistrictName from tempdistrict where indexNo=1');
        //$district=DB::table('tempdistrict')->select('DistrictName')->where('indexNo',1)->value('DistrictName');
        //$a=$district->DistrictName;
        //$post=DB::select('Select * from flights where FromLoc = "$district" ');
        //$post = DB::table('flights')->select('*')->where('FromLoc', $district);
       
        $post=DB::select('Select * from flights where FromLoc = (Select DistrictName from tempdistrict where indexNo=1) ');
        return view('pages.flightIndex')->with('post',$post);
    }

    public function ShowAdminFlightIndex(){
        $post=DB::select('Select * from flights');
        return View('pages/AdminFlightIndex')->with('post',$post);
    }

    public function ShowCreateNewFlight(){    
        return View('pages/CreateNewFlight');
    }

    Public function DeleteFlight(Request $request){
        $validatedData=$request->validate(
            [   'DeleteBtn' => 'required'    ]  
            );
        $DelRequest = $request->input('DeleteBtn');
        $SearchFlight=DB:: table('flights')->where('FlightId', $DelRequest)->value('FlightId');
        if ($DelRequest==$SearchFlight)   {       
        DB::table('flights')->where('FlightId', $DelRequest)->delete();
        return View('pages/DeleteSuccess');  } 
        else return View('pages/DeleteFailure');
    }

    Public function DeleteHotel (Request $request){
        $validatedData=$request->validate(
            [   'HotelDel' => 'required'    ]  
            );
        $DelRequest = $request->input('HotelDel');
        $SearchHotel=DB:: table('hotels')->where('hID', $DelRequest)->value('hID');
        if ($DelRequest==$SearchHotel)   {       
        DB::table('hotels')->where('hID', $DelRequest)->delete();
        return View('pages/DeleteSuccess2');  } 
        else return View('pages/DeleteFailure2');
    }

    Public function DeleteUser (Request $request){
        $validatedData=$request->validate(
            [   'UserDel' => 'required'    ]  
            );
        $DelRequest = $request->input('UserDel');
        $SearchUser=DB:: table('users')->where('userName', $DelRequest)->value('userName');
        if ($DelRequest==$SearchUser)   {       
        DB::table('users')->where('userName', $DelRequest)->delete();
        return View('pages/DeleteUserSuccess');  } 
        else return View('pages/DeleteUserFailure');
    }

    
    Public function ShowAdminUserStats(){// "COMPLEX" QUERY RIGHT HERE BABY!       
         $show = DB::table('users')
        ->join('utravel', 'users.userName', '=', 'utravel.userName')    
        ->select('utravel.userName',DB::raw('sum(utravel.cost) as sumValue' ),DB::raw('count(distinct utravel.destination) as visits' ),
        'users.fName', 'users.lName','users.registeredOn','users.travelCount')
        ->groupBy('utravel.userName','users.fName','users.lName','users.registeredOn','users.travelCount')
         ->get();
        return View('/pages/AdminUserStats')->with('show',$show);       
    }

    
    Public function ShowAdminUserStatsHotel(){// comPlExITY      
        $show = DB::table('users')
       ->join('uhotel', 'users.userName', '=', 'uhotel.userName')    
       ->select('uhotel.userName',DB::raw('sum(uhotel.cost) as sumValue' ),DB::raw('count(uhotel.hotelName) as visits' ),
       'users.fName', 'users.lName','users.registeredOn','users.travelCount')
       ->groupBy('uhotel.userName','users.fName','users.lName','users.registeredOn','users.travelCount')
        ->get();
       return View('/pages/AdminUserStatsHotel')->with('show',$show);       
   }


    Public function SearchAdminFlight(){ 
        $post=DB::select('Select * from flights');
        return View('pages/AdminFlightSearch')->with('post',$post);        
    }

    Public function SearchAdminHotel(){ 
            $show=DB::select('Select * from hotels');
            return View('pages/AdminHotelSearch')->with('show',$show);        
    }

    public function ShowAdminHotelIndex(){
        $show=DB::select('Select * from hotels');
        return View('pages/AdminHotelIndex')->with('show',$show);
    }
    public function ShowCreateNewHotel (){
        return View('pages/CreateNewHotel');
    }
 

    public function ShowAllUserIndex(){//Sim
        $show = DB::select('Select * from users');    
        return View('/pages/UserIndex')->with('show',$show); 
    }
       /* $show=DB::select('Select * from users');
        return View('/pages/UserIndex')->with('show',$show);*/
        //
    /*  FIND THE TOTAL SUM
        $show = DB:: table('utravel')->select('userName',DB::raw('SUM(cost) as cost'))
                ->groupBy('userName')->get();
                return  View('/pages/UserIndex')->with('show', $show);*/
    public function ShowAdminUserSearch(Request $request){
    
        $show = DB::select('Select * from users');    
        return View('/pages/AdminUserSearch')->with('show',$show);
    }

    public function SearchUserResults(Request $request){
        $validatedData=$request->validate(
            [   'Search' => 'required'    ]  
            );
        $SearchBar = $request->input('Search');    
        /*$post=DB:: table('users')->where('userName', 'LIKE', '%'.$SearchBar.'%')->get();*/
        $show = DB:: table('users')->where('userName', 'LIKE', '%'.$SearchBar.'%')->get();
        return View('/pages/UserSearchResults')->with('show',$show);    }

    public function SearchFlightResults(Request $request){
            $validatedData=$request->validate(
                [   'Search' => 'required'    ]  
                );
            $SearchBar = $request->input('Search');    
            $post=DB:: table('flights')->where('FlightName', 'LIKE', '%'.$SearchBar.'%')->get();
            return View('/pages/AdminSearchFlightSuccess')->with('post',$post);    
    }

    public function SearchHotelResults(Request $request){ //HOTEL
        $validatedData=$request->validate(
            [   'Search' => 'required'    ]  
            );
        $SearchBar = $request->input('Search');
        //$SearchHotel=DB:: table('hotels')->where('hName','LIKE' , '%'.$SearchBar.'%')->value('hName');
        $show=DB:: table('hotels')->where('hName','LIKE' , '%'.$SearchBar.'%')->get();
        return View('/pages/AdminSearchHotelSuccess')->with('show',$show);   
        /*return  View('/pages/AdminSearchHotelFailure'); */      // I AM A GENIUS!!
}

    public function StoreNewFlight(Request $request){        
        $Country = $request->input('Country');
        $Location = $request->input('ToLoc');
        $DistanceFromDhaka = $request->input('Distance');
        $FlightId = $request->input('fID');
        $Date = $request->input('Date');
        $AvailableSeats = $request->input('Seats');
        $PriceRegular = $request->input('Regular');
        $PriceBusiness = $request->input('Business');
        $FlightName = $request->input('Flight');
        $FromLoc = $request->input('FromLoc');
        $LocID = $request->input('LocID');
        
        $data= array('Country'=>$Country, 'Location'=>$Location,'DistanceFromDhaka'=>$DistanceFromDhaka,'FlightId'=>$FlightId,
        'Date'=>$Date,'AvailableSeats'=>$AvailableSeats,'PriceRegular'=>$PriceRegular,'PriceBusiness'=>$PriceBusiness,
        'created_at'=> NULL,'updated_at'=>NULL,'FlightName'=>$FlightName,'FromLoc'=>$FromLoc,'LocID'=>$LocID );//ATTRIBUTE NAME
        DB::table('flights')->insert($data); //TABLE NAME

        return View('pages/CreateNotify');
    }

    public function StoreNewHotel(Request $request){  
        $HotelID = $request->input('hID');  
        $HotelName = $request->input('Hotel');
        $Location = $request->input('Location');
        $Country = $request->input('Country');
        $LocID = $request->input('LocID');
        $PremLefts = $request->input('PremiumLefts');
        $DelLefts = $request->input('DeluxeLefts');
        $premPrice = $request->input('PremiumPrice');
        $DelPrice = $request->input('DeluxePrice');
        $Status = $request->input('Status');

        $data= array('hID'=>$HotelID, 'hName'=>$HotelName,'loc'=>$Location,'country'=>$Country,
        'locID'=>$LocID,'PremLefts'=>$PremLefts,'DelLefts'=>$DelLefts,'premPrice'=>$premPrice,
        'DelPrice'=>$DelPrice,'stars'=>$Status,'Rating'=> NULL );//ATTRIBUTE NAME
        DB::table('hotels')->insert($data); //TABLE NAME

        return View('pages/CreateNotify2');        
    }

    public function ShowCities (){
        $post=DB::select('Select DISTINCT Location, Country, DistanceFromDhaka, LocId from flights  order by Location');
        return view('pages.cityIndex')->with('post',$post);
    }
    //THIS SHOWS LOCATION INFORMATION!!!
    public function show($id){
        //$posts=Post::where('LocId', $id);
        $LocMention=DB:: table('flights')->where('LocId', $id)->value('Location');
        $CountryMention=DB::table('flights')->where('LocId', $id)->value('Country');
        $post=DB:: table('flights')->where('LocId', $id)->get();
        return view ('pages.IndDestLoc')->with('post',$post)
                                        ->with('LocMention', $LocMention)
                                        ->with('CountryMention', $CountryMention);
    }
    //THIS SHOWS FLIGHT INFORMATION!!
    public function showFlightInfo($id){
        $ShowFlightData=DB:: table('flights')->where('FlightId', $id)->first();
        //return $ShowFlightData;
        return view('pages/pageshowFlightInfo')->with('ShowFlightData',$ShowFlightData);
    }


    public function create(){
        //return view('pages.create');

    }

    public function StoreTempDistrict (Request $request){
        //$this->validate ($request,['Location Tracker' => 'required']);      
        //return   $request;
       /* $posts= new Post;
        $posts-> title = $request->input('title');
        $posts->save();

        return redirect('tempdistrict')->with('Success', 'Post Created');*/
            DB::table('tempdistrict')->truncate();  
        $title = $request->input('title');
        $data= array('DistrictName'=>$title, 'indexNo' => 1);//ATTRIBUTE NAME
        DB::table('tempdistrict')->insert($data); //TABLE NAME

        $getTempDistrict=DB:: table('tempdistrict')->where('indexNo', 1)->value('DistrictName'); //ACCESS Temp District
        $getDistrictFlight=DB:: table('flights')->where('FromLoc', $getTempDistrict)->get();
        return view('welcomeUpdated')->with('getDistrictFlight', $getDistrictFlight);
    }

    public function verifyCredentials(Request $request){
        $username= $request->input('username');
        $password=$request->input('password');

        $tablePassword=DB:: table('users')->where('userName', $username)->value('password'); 
        //$tableUsername=DB:: table('users')->where('password', $password)->value('userName');
        $tablefName=DB:: table('users')->where('userName', $username)->value('fName'); 

        if (/*$username==$tableUsername &&*/ $password==$tablePassword){
            $data= array('userName'=>$username, 'password' => $tablePassword, 'indexNo'=>1, 'tempfName'=>$tablefName);//ATTRIBUTE NAME
            DB::table('tempuser')->insert($data); //TABLE NAME

            $getTempName=DB:: table('tempuser')->where('indexNo', 1)->value('tempfName');

            return view('/LoggedInwelcome')->with('getTempName',$getTempName);
        }
        else{
            return 9998;
        }        
    }

    public function destroy(){
        DB::table('tempuser')->truncate();  
        DB::table('tempdistrict')->truncate();  
        return view('/Login');
    }

    public function confirmFlight(Request $request){
        $validatedData=$request->validate(
            [   'username' => 'required',       'password' => 'required',
                'class' =>  'required',         'fID'=> 'required',         
                'cardNo' => 'required'        ]  
            );
            //INPUT VALUES
            $username= $request->input('username');
            $password=$request->input('password');
            $class=$request->input('class');
            $fID=$request->input('fID');
            $cardNo=$request->input('cardNo');
            //EXTRACT TABLE VALUES
            //$tableUsername=DB:: table('users')->where('password', $password)->value('userName');
            $tablePassword=DB:: table('users')->where('userName', $username)->value('password'); 
            $tableCardNo=DB:: table('users')->where('userName', $username)->value('CardNo');             
            $tablefName=DB:: table('users')->where('userName', $username)->value('fName');            
            $tablelName=DB:: table('users')->where('userName', $username)->value('lName'); 

            $tempPassword=DB:: table('tempuser')->where('userName', $username)->value('password');

            $tableFlightID=DB:: table('flights')->where('FlightId', $fID)->value('FlightId'); 
            $tableFromLoc=DB:: table('flights')->where('FlightId', $fID)->value('FromLoc'); 
            $tableLocation=DB:: table('flights')->where('FlightId', $fID)->value('Location');
            
            $tableFlightName=DB:: table('flights')->where('FlightId', $fID)->value('FlightName');
            $tableDate=DB:: table('flights')->where('FlightId', $fID)->value('Date'); 
            $tableAvailableSeats=DB:: table('flights')->where('FlightId', $fID)->value('AvailableSeats'); 
            //PRICE FINDER THROUGH CLASS
            $findPriceRegular=DB:: table('flights')->where('FlightId', $fID)->value('PriceRegular');
            $findPriceBusiness=DB:: table('flights')->where('FlightId', $fID)->value('PriceBusiness'); 
            if($class == 'Regular'|| $class == 'regular' || $class == 'REGULAR' )  {
                $confrimedPrice=$findPriceRegular;            } 
            else if ($class == 'Business'|| $class == 'business' || $class == 'BUSINESS'){
                $confrimedPrice=$findPriceBusiness;            }                
            else    return View('pages/PaymentFailure')->with('class',$class)->with('tableAvailableSeats',$tableAvailableSeats);
            //TRAVEL COUNTER & DISCOUNTS           
            $tableTravelCount=DB:: table('users')->where('password', $password)->value('travelCount');
            if($tableTravelCount >= 25 && $tableTravelCount <50){
            $DiscountValue=$confrimedPrice*0.05;
                $confrimedPrice=$confrimedPrice-$DiscountValue;}
            else if($tableTravelCount >= 50 && $tableTravelCount <100){
                $DiscountValue=$confrimedPrice*0.1;
                $confrimedPrice=$confrimedPrice-$DiscountValue;}
            else if($tableTravelCount >= 100){
                    $DiscountValue=$confrimedPrice*0.15;
                    $confrimedPrice=$confrimedPrice-$DiscountValue;}
            //PRIMARY CONDITION
            if ($tablePassword==$password && $tempPassword==$tablePassword && $tableFlightID==$fID && $tableCardNo==$cardNo){
                //INCREASE TRAVEL COUNT
                $tableTravelCount = $tableTravelCount +1;
                DB::table('users')->where('password', $password)->update(array('travelCount'=> $tableTravelCount,));    
                //AVAILABLE SEATS UPDATE           
               
                //IF ELSE ----->> CONTINUE
                if ($tableAvailableSeats > 0){
                DB::table('flights')->where('FlightId', $fID)->update(array('AvailableSeats'=> $tableAvailableSeats - 1,));  
                    //INSERT TO TRAVEL COUNT
                    $data= array('userName'=> $username, 'fName' => $tablefName, 'lName'=> $tablelName,'fromLoc' => $tableFromLoc, 'destination' => $tableLocation, 'flightName'=> $tableFlightName, 'flightID' => $tableFlightID, 'date' => $tableDate,'cost' => $confrimedPrice );//ATTRIBUTE NAME
                    DB::table('utravel')->insert($data); //TABLE NAME
                    //return   $confrimedPrice;
                    return View('pages/PaymentSuccess');}
                else {
                    return View('pages/PaymentFailure')->with('class',$class)->with('tableAvailableSeats',$tableAvailableSeats);;
                }
            }//end of first if
            else{
                return View('pages/PaymentFailure')->with('class',$class)->with('tableAvailableSeats',$tableAvailableSeats);;
            }
    }
    public function userTravels (){
        $show=DB::select('Select date, fromLoc, destination, flightName, cost FROM utravel WHERE userName = (SELECT userName FROM tempuser)');
        return view('pages.ShowTravels')->with('show',$show);        
    }

    public function showHotels (){
        $show=DB::select('Select * from hotels');
        return view('pages.ShowHotelIndex')->with('show',$show);        
    }
    public function showHotelInfo($id){        
        $ShowHotelData=DB:: table('hotels')->where('hId', $id)->first();
        return view('/pages/PagesShowHotelInfo')->with ('ShowHotelData',$ShowHotelData);
    }
    public function ShowPopularHotel(){        
        $show=DB::select('Select * from hotels ORDER BY Rating desc');
        return view('pages.ShowPopularHotels')->with('show',$show);  
    }
    public function ShowLocationHotel(Request $request){
        $validatedData=$request->validate(
            [   'loc' => 'required',             ]  
            );
            $GetLocation= $request->input('loc');
            $getDistrictFlight=DB:: table('hotels')->where('loc', $GetLocation)->get();
        return View('/pages/ShowLocationHotels')->with('getDistrictFlight',$getDistrictFlight);
    }

    public function userHotels (){
        $show=DB::select('Select * FROM uhotel WHERE userName = (SELECT userName FROM tempuser)'); //COMPLEEXX QUERYY
        return view('pages.showHotels')->with('show',$show);        
    }

    public function confirmHotel(Request $request){
        $validatedData=$request->validate(
            [   'username' => 'required',       'password' => 'required',
                'room' =>  'required',         'hID'=> 'required',         
                'cardNo' => 'required'        ]  
            );
            //INPUT VALUES
            $username= $request->input('username');
            $password=$request->input('password');
            $class=$request->input('room');
            $hID=$request->input('hID');
            $cardNo=$request->input('cardNo');
            //EXTRACT TABLE VALUES
            //$tableUsername=DB:: table('users')->where('password', $password)->value('userName');
            $tablePassword=DB:: table('users')->where('userName', $username)->value('password'); 
            $tableCardNo=DB:: table('users')->where('userName', $username)->value('CardNo');             
            $tablefName=DB:: table('users')->where('userName', $username)->value('fName');            
            $tablelName=DB:: table('users')->where('userName', $username)->value('lName'); 

            $tempPassword=DB:: table('tempuser')->where('userName', $username)->value('password');

            $tableHotelID=DB:: table('hotels')->where('hID', $hID)->value('hID'); 
            $tableLocation=DB:: table('hotels')->where('hID', $hID)->value('loc');            
            $tableHotelName=DB:: table('hotels')->where('hID', $hID)->value('hName');

            $tableDate=DB:: table('tempuser')->where('userName', $username)->value('signedIn');
            //PRICE FINDER THROUGH CLASS
            $findPricePremium=DB:: table('hotels')->where('hID', $hID)->value('premPrice');
            $findPriceDeluxe=DB:: table('hotels')->where('hID', $hID)->value('delPrice'); 

            if($class == 'Premium'|| $class == 'premium' || $class == 'PREMIUM' )  {
                $roomCounter=DB:: table('hotels')->where('hID', $hID)->value('premLefts');
                $confrimedPrice=$findPricePremium;            } 
            else if ($class == 'Deluxe'|| $class == 'deluxe' || $class == 'DELUXE'){
                $roomCounter=DB:: table('hotels')->where('hID', $hID)->value('delLefts');
                $confrimedPrice=$findPriceDeluxe;             }                
            else    return View('pages/PaymentFailure')->with('class',$class);

            //PRIMARY CONDITION
            if ($tablePassword==$password && $tempPassword==$tablePassword && $tableHotelID==$hID && $tableCardNo==$cardNo){
                //AVAILABLE SEATS UPDATE           
                //IF ELSE ----->> CONTINUE
                if ($roomCounter > 0){
                    DB::table('hotels')->where('hID', $hID)->update(array('premLefts'=> $roomCounter - 1,));
                    /*EXTRA SECURITY  MIGHT NOT NEED IT
                    if($class == 'Premium'|| $class == 'premium' || $class == 'PREMIUM' )
                            DB::table('hotels')->where('hID', $fID)->update(array('premLefts'=> $roomCounter - 1,));  
                    else    DB::table('hotels')->where('hID', $fID)->update(array('delLefts'=> $roomCounter - 1,));*/
                    //INSERT TO TRAVEL COUNT
                    $data= array('userName'=> $username, 'fName' => $tablefName, 'lName'=> $tablelName,'destination' => $tableLocation, 'hotelName'=> $tableHotelName, 'hotelID' => $tableHotelID, 'date' => $tableDate, 'cost' => $confrimedPrice);//ATTRIBUTE NAME
                    DB::table('uhotel')->insert($data); //TABLE NAME
                    //return   $confrimedPrice;
                    return View('pages/PaymentSuccess');}
                else {
                    return View('pages/PaymentFailure')->with('class',$class);
                }
            }//end of first if
            else{
                return View('pages/PaymentFailure')->with('class',$class);
            }
        }

    public function ShowAdminInbox(){
        $show=DB::select('Select * FROM usermessenger'); //INVERSELY PROPORTIONAL RELATIONSHIP
            return View('pages/AdminInbox')->with('show',$show);
    }
    public function SendAdminMessage(Request $request){ 
        $validatedData=$request->validate(
        [   'user' => 'required',       'newText' => 'required'        ]  
    );
    //INPUT VALUES
    $username= $request->input('user');
    $newText=$request->input('newText');
    
    $checkAvail=DB:: table('users')->where('userName', $username)->value('userName');
    $indexValue = DB::table('adminmessenger')->count();

    if($username==$checkAvail){
        $data= array('MessageIndex'=> $indexValue, 'userName' => $username, 'MessageText'=> $newText,);//BOORING!!
        DB::table('adminmessenger')->insert($data);  
        return View('pages/AdminMessageSent');
    }
    else{
        return View('pages/AdminMessageFail');}
    }

    public function ShowUserInbox(){        
        $show=DB::select('Select * FROM adminmessenger where userName =(Select userName from tempuser where indexNo=1)'); //COMPLEX
        return View('pages/UserInbox')->with('show',$show);

    }
    
    public function SendUserMessage(Request $request){ 
        $validatedData=$request->validate(
        [  'newText' => 'required'        ]  
    );
    //INPUT VALUES
    $newText=$request->input('newText');    
    $username=DB:: table('tempuser')->where('indexNo', 1)->value('userName');

    $indexValue = DB::table('usermessenger')->count();
        $data= array('MessageIndex'=> $indexValue, 'userName' => $username  , 'MessageText'=> $newText,);//BOORING!!
        DB::table('usermessenger')->insert($data);  
        return View('pages/UserMessageSuccess');
    }

    public function ShowUserPackage(){
        $show = DB::table('flights')
        ->join('hotels', 'flights.LocID', '=', 'hotels.locID')    
        ->select('flights.Location', 'flights.FlightName', 'hotels.hName', 'flights.DistanceFromDhaka')
        ->groupBy('flights.Location', 'flights.FlightName', 'hotels.hName', 'flights.DistanceFromDhaka')
         ->get();
        return View('/pages/userPackage')->with('show',$show);  
    }

    public function ShowUserPackageStats(){
        $show = DB::table('flights')
        ->join('hotels', 'flights.LocID', '=', 'hotels.locID')    
        ->select('flights.FlightName', 'hotels.hName', 'hotels.delLefts', 'hotels.premLefts', 'flights.AvailableSeats')
        ->groupBy('flights.FlightName', 'hotels.hName', 'hotels.delLefts', 'hotels.premLefts', 'flights.AvailableSeats')
         ->get();
        return View('/pages/userPackageStats')->with('show',$show);  
    }

    public function ShowUserProfile(){
        $show = DB::select('Select * FROM users where userName = (Select userName from tempuser where indexNo=1)');
        return View('/pages/UserProfile')->with('show',$show);
    }

    public function ShowuserPurchaseInfo(){
        $getUserName= DB:: table('tempuser')->where('indexNo', 1)->value('userName');
        $show = DB::table('flights')
        ->join('utravel', 'flights.FlightID', '=', 'utravel.flightID') 

        ->select('utravel.flightName', 'flights.PriceRegular', 'flights.PriceBusiness', 'flights.AvailableSeats','utravel.Date', 'utravel.cost' )
        ->where('utravel.userName', $getUserName)       
        ->groupBy('utravel.flightName', 'flights.PriceRegular', 'flights.PriceBusiness', 'flights.AvailableSeats','utravel.Date', 'utravel.cost')
         ->get();
        
        return View('/pages/userPurchaseInfo')->with('show',$show);
    }
    //DB::raw('count(uhotel.hotelName) as visits' )
}