@extends('layouts.web')


@section('content')
<!-- SUBHEADER
================================================== -->
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                 ACCOMMODATION
            </p>
            <p class="left">
            {if $smarty.session.login}
            <div class="welcomeuser">Welcome: {$cms.login_name} | <a class="readmore1" href="index.php?mode=logout&id={$smarty.session.uid}">Logout</a></div>
            {/if}
            </p>
        </div>
    </div>
</div>

<div class="background_content">
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
    <!-- MAIN CONTENT-->
    <div class="twelve columns">
        <!-- Our History-->
        <div class="sectiontitle">
            <h4>Accommodation Options</h4>
        </div>

        <p>
            The following are rates and websites of hotels that are available in Bogor:
            </p>
        <!-- TABLES -->
        <table>
            <thead>
              <tr>
                <th colspan="2">Name of Hotel
                </th>
                <th>Room Type</th>
                <th>Daily Rate (IDR)</th>
                <th>Estimate Distance from the Venue</th>
                <th>Addresses</th>
              </tr>
             </thead>
            <tbody>
              <tr>
                <td><img src="templates/theme02/images/photo_hotel/santika01.jpeg"></td>
                <td><strong>Santika Hotel</strong></td>
                <td>Superior</td>
                <td>682,000</td>
                <td>6.0 km</td>
                <td>Jalan Raya Pajajaran Botani Square, Bogor 16127 Indonesia, Ph. +62 251 8400707 (<a href="http://www.santika.com/santika-bogor" target="_blank">http://www.santika.com/santika-bogor</a>)
                </td>
              </tr>
              <tr>
                <td ><img src="templates/theme02/images/photo_hotel/ipb_convention_hotel.png"></td>
                <td ><strong>IPB Convention Hotel</strong></td>
                <td >Superior</td>
                <td >653,000</td>
                <td >6.0 km</td>
                <td >Jalan Raya Pajajaran Botani Square, Bogor 16127 Indonesia, Ph. +62 251 8345698 (<a href="http://ipbhotel.com/" target="_blank">http://ipbhotel.com/</a>)
                </td>
              </tr>
              <tr>
                <td ><img src="templates/theme02/images/photo_hotel/fave_hotel.png"></td>
                <td ><strong>Fave Hotel</strong></td>
                <td >Standard</td>
                <td >558,000</td>
                <td >5.5 km</td>
                <td >Jalan Cidangiang No.1,  Pajajaran, Bogor 16129 Indonesia, Phone:+62 251 8356100 (<a href="http://www.favehotels.com/hotellist/eng/24/favehotel-padjajaran-bogor" target="_blank">http://www.favehotels.com/hotellist/eng/24/favehotel-padjajaran-bogor</a>)

                </td>
              </tr>
              <tr>
                <td ><img src="templates/theme02/images/photo_hotel/amaris_padjajaran.png"></td>
                <td ><strong>Amaris Pajajaran Hotel</strong></td>
                <td >Smart Room</td>
                <td >450,000</td>
                <td >6.0 km</td>
                <td >Jalan Padjajaran No. 25 Bogor 16127, Indonesia, Phone:+62 251 8312200 (<a href="http://amarishotel.com/amaris-bogor" target="_blank">http://amarishotel.com/amaris-bogor</a>)

                </td>
              </tr>
              <tr>
                <td ><img src="templates/theme02/images/photo_hotel/amaris_pakuan.png"></td>
                <td ><strong>Amaris Pakuan Hotel</strong></td>
                <td >Smart Room</td>
                <td >450,000</td>
                <td >6.0 km</td>
                <td >Jalan Pakuan No.2, Bogor 16143, Indonesia, Phone:+62 251 7561000 (<a href="http://amarishotel.com/bogor-pakuan" target="_blank">http://amarishotel.com/bogor-pakuan</a>)

                </td>
              </tr>
              <tr>
                <td><img src="templates/theme02/images/photo_hotel/horison_bogor.jpeg"></td>
                <td ><strong>Horison Bogor Hotel</strong></td>
                <td >Deluxe</td>
                <td >620,000</td>
                <td >5.5 km</td>
                <td >Jl. Pakuan No. 7, Baranangsiang, Bogor 16143, Indonesia, Phone:+62 251 8390120 (<a href="http://horison.horison-group.com/bogor" target="_blank">http://horison.horison-group.com/bogor</a>)
</td>
              </tr>
              
              
              <tr>
                <td><img src="templates/theme02/images/photo_hotel/sofyan_inn_bogor.png"></td>
                <td ><strong>Sofyan Inn Srigunting Hotel</strong></td>
                <td >Superior</td>
                <td >550,000</td>
                <td >7.5 km</td>
                <td >Jl. Pangrango No. 19 – Bogor – Jawa Barat16151, Phone:  +62 251 833 9661 / Fax +62 251 833 9660 (<a href="http://sofyanhotel.com/sofyan-inn-srigunting-bogor-2/" target="_blank">http://sofyanhotel.com/sofyan-inn-srigunting-bogor-2/</a>)
</td>
              </tr>
              
              <tr>
                <td><img src="templates/theme02/images/photo_hotel/zest_hotel_bogor.png"></td>
                <td ><strong>Zest Hotel Bogor</strong></td>
                <td >Standard</td>
                <td >435,000</td>
                <td >7.0 km</td>
                <td >Jl. Pajajaran No. 27 Bogor, Indonesia, 16151, Phone: 0-800-1-6767-88 (<a href="http://www.zesthotel.com/regions/city/zest-hotels/x,1,2349/zest-hotel-bogor.html" target="_blank">http://www.zesthotel.com/regions/city/zest-hotels/x,1,2349/zest-hotel-bogor.html</a>)
</td>
              </tr>
            <tr>
                <td><img src="templates/theme02/images/photo_hotel/royal_hotel.png"></td>
                <td ><strong>Royal Hotel</strong></td>
                <td >Superior</td>
                <td >580,000</td>
                <td >8.5 km</td>
                <td >Jl. Ir. H. Djuanda No. 16 Bogor, Phone : +62 251 8347123 / +62 251 8347333 (<a href="http://hotelroyalbogor.com/" target="_blank">http://hotelroyalbogor.com/</a>)
</td>
              </tr>
              <tr>
                <td><img src="templates/theme02/images/photo_hotel/pajajaran_suite.jpeg"></td>
                <td><strong>Padjadjaran Suites Hotel & Conference</strong></td>
                <td>Superior</td>
                <td>762,000</td>
                <td> 7.5 km</td>
                <td>Jl. Pajajaran No. 17, Warung Jambu, Baranang Siang, Bogor, Phone : +62 251 835 9000 (<a href="http://www.padjadjaranhotels.com/" target="_blank">http://www.padjadjaranhotels.com/</a>)
</td>
              </tr>
              
              </tbody>
            </table>
        
    <p>
            SEAMEO BIOTROP Dormitory (twin sharing room) is available for first come-first served booking. Further details, please contact: <a href="mailto:bio-ictb@biotrop.org">bio-ictb@biotrop.org</a>
        </p>

</div><!-- end main content-->
</div>

<div class="hr">
</div>
@endsection
