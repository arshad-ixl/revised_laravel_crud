<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_cities', function (Blueprint $table) {
            $table->increments('city_id');
            $table->String('city_name');
            $table->Integer('city_state_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_cities');
    }
}


// sql query
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Alipur', '101','1'),
// VALUES('Andaman Island', '102','1'),
// VALUES('Anderson Island', '103','1'),
// VALUES('Arainj-Laka-Punga', '104','1'),
// VALUES('Austinabad', '105','1'),
// VALUES('Bamboo Flat', '106','1'),
// VALUES('Barren Island', '107','1'),
// VALUES('Beadonabad', '108','1'),
// VALUES('Betapur', '109','1'),
// VALUES('Bindraban', '110','1'),
// VALUES('Bonington', '111','1'),
// VALUES('Brookesabad', '112','1'),
// VALUES('Cadell Point', '113','1'),
// VALUES('Calicut', '114','1'),
// VALUES('Chetamale', '115','1'),
// VALUES('Cinque Islands', '116','1'),
// VALUES('Defence Island', '117','1'),
// VALUES('Digilpur', '118','1'),
// VALUES('Dolyganj', '119','1'),
// VALUES('Flat Island', '120','1'),
// VALUES('Geinyale', '121','1'),
// VALUES('Great Coco Island', '122','1'),
// VALUES('Haddo', '123','1'),
// VALUES('Havelock Island', '124','1'),
// VALUES('Henry Lawrence Island', '125','1'),
// VALUES('Herbertabad', '126','1'),
// VALUES('Hobdaypur', '127','1'),
// VALUES('Ilichar', '128','1'),
// VALUES('Ingoie', '128','1'),
// VALUES('Inteview Island', '130','1'),
// VALUES('Jangli Ghat', '131','1'),
// VALUES('Jhon Lawrence Island', '132','1'),
// VALUES('Karen', '133','1'),
// VALUES('Kartara', '134','1'),
// VALUES('KYD Islannd', '135','1'),
// VALUES('Landfall Island', '136','1'),
// VALUES('Little Andmand', '137','1'),
// VALUES('Little Coco Island', '138','1'),
// VALUES('Long Island', '138','1'),
// VALUES('Maimyo', '140','1'),
// VALUES('Malappuram', '141','1'),
// VALUES('Manglutan', '142','1'),
// VALUES('Manpur', '143','1'),
// VALUES('Mitha Khari', '144','1'),
// VALUES('Neill Island', '145','1'),
// VALUES('Nicobar Island', '146','1'),
// VALUES('North Brother Island', '147','1'),
// VALUES('North Passage Island', '148','1'),
// VALUES('North Sentinel Island', '149','1'),
// VALUES('Nothen Reef Island', '150','1'),
// VALUES('Outram Island', '151','1'),
// VALUES('Pahlagaon', '152','1'),
// VALUES('Palalankwe', '153','1'),
// VALUES('Passage Island', '154','1'),
// VALUES('Phaiapong', '155','1'),
// VALUES('Phoenix Island', '156','1'),
// VALUES('Port Blair', '157','1'),
// VALUES('Preparis Island', '158','1'),
// VALUES('Protheroepur', '159','1'),
// VALUES('Rangachang', '160','1'),
// VALUES('Rongat', '161','1'),
// VALUES('Rutland Island', '162','1'),
// VALUES('Sabari', '163','1'),
// VALUES('Saddle Peak', '164','1'),
// VALUES('Shadipur', '165','1'),
// VALUES('Smith Island', '166','1'),
// VALUES('Sound Island', '167','1'),
// VALUES('South Sentinel Island', '168','1'),
// VALUES('Spike Island', '169','1'),
// VALUES('Tarmugli Island', '170','1'),
// VALUES('Taylerabad', '171','1'),
// VALUES('Titaije', '172','1'),
// VALUES('Toibalawe', '173','1'),
// VALUES('Tusonabad', '174','1'),
// VALUES('West Island', '175','1'),
// VALUES('Wimberleyganj', '176','1'),
// VALUES('Yadita', '177','1');


// -- Andhra Pradesh
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Adilabad', '201','2'),
// VALUES('Anantapur', '201','2'),
// VALUES('Chittoor', '203','2'),
// VALUES('Cuddapah', '204','2'),
// VALUES('East Godavari', '205','2'),
// VALUES('Guntur', '206','2'),
// VALUES('Hyderabad', '207','2'),
// VALUES('Karimnagar', '208','2'),
// VALUES('Khammam', '209','2'),
// VALUES('Krishna', '210','2'),
// VALUES('Kurnool', '211','2'),
// VALUES('Mahabubnagar', '212','2'),
// VALUES('Medak', '213','2'),
// VALUES('Nalgonda', '214','2'),
// VALUES('Nellore', '215','2'),
// VALUES('Nizamabad', '216','2'),
// VALUES('Prakasam', '217','2'),
// VALUES('Rangareddy', '218','2'),
// VALUES('Srikakulam', '219','2'),
// VALUES('Visakhapatnam', '220','2'),
// VALUES('Vizianagaram', '221','2'),
// VALUES('Warangal', '222','2'),
// VALUES('West Godavari', '223','2');



// -- Arunachal Pradesh
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Anjaw', '301','3'),
// VALUES('Changlang', '302','3'),
// VALUES('Dibang Valley', '303','3'),
// VALUES('East Kameng', '304','3'),
// VALUES('East Siang', '305','3'),
// VALUES('Itanagar', '306','3'),
// VALUES('Kurung Kumey', '307','3'),
// VALUES('Lohit', '308','3'),
// VALUES('Lower Dibang Valley', '309','3'),
// VALUES('Lower Subansiri', '310','3'),
// VALUES('Papum Pare', '311','3'),
// VALUES('Tawang', '312','3'),
// VALUES('Tirap', '313','3'),
// VALUES('Upper Siang', '314','3'),
// VALUES('Upper Subansiri', '315','3'),
// VALUES('West Kameng', '316','3'),
// VALUES('West Siang', '317','3');

// -- Assam
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Barpeta', '401','4'),
// VALUES('Bongaigaon', '402','4'),
// VALUES('Cachar', '403','4'),
// VALUES('Darrang', '404','4'),
// VALUES('Dhemaji', '405','4'),
// VALUES('Dhubri', '406','4'),
// VALUES('Dibrugarh', '407','4'),
// VALUES('Goalpara', '408','4'),
// VALUES('Golaghat', '409','4'),
// VALUES('Guwahati', '410','4'),
// VALUES('Hailakandi', '411','4'),
// VALUES('Jorhat', '412','4'),
// VALUES('Kamrup', '413','4'),
// VALUES('Karbi Anglong', '414','4'),
// VALUES('Karimganj', '415','4'),
// VALUES('Kokrajhar', '416','4'),
// VALUES('Lakhimpur', '417','4'),
// VALUES('Marigaon', '418','4'),
// VALUES('Nagaon', '419','4'),
// VALUES('Nalbari', '420','4'),
// VALUES('North Cachar Hills', '421','4'),
// VALUES('Silchar', '422','4'),
// VALUES('Sivasagar', '423','4'),
// VALUES('Sonitpur', '424','4'),
// VALUES('Tinsukia', '425','4'),
// VALUES('Udalguri', '426','4');


// -- Bihar
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Araria', '501','5'),
// VALUES('Aurangabad', '502','5'),
// VALUES('Banka', '503','5'),
// VALUES('Begusarai', '504','5'),
// VALUES('Bhagalpur', '505','5'),
// VALUES('Bhojpur', '506','5'),
// VALUES('Buxar', '507','5'),
// VALUES('Darbhanga', '508','5'),
// VALUES('East Champaran', '509','5'),
// VALUES('Gaya', '510','5'),
// VALUES('Gopalganj', '511','5'),
// VALUES('Jamshedpur', '512','5'),
// VALUES('Jamui', '513','5'),
// VALUES('Jehanabad', '514','5'),
// VALUES('Kaimur (Bhabua)', '515','5'),
// VALUES('Katihar', '516','5'),
// VALUES('Khagaria', '517','5'),
// VALUES('Kishanganj', '518','5'),
// VALUES('Lakhisarai', '519','5'),
// VALUES('Madhepura', '520','5'),
// VALUES('Madhubani', '521','5'),
// VALUES('Munger', '522','5'),
// VALUES('Muzaffarpur', '523','5'),
// VALUES('Nalanda', '524','5'),
// VALUES('Nawada', '525','5'),
// VALUES('Patna', '526','5'),
// VALUES('Purnia', '527','5'),
// VALUES('Rohtas', '528','5'),
// VALUES('Saharsa', '529','5'),
// VALUES('Samastipur', '530','5'),
// VALUES('Saran', '531','5'),
// VALUES('Sheikhpura', '532','5'),
// VALUES('Sheohar', '533','5'),
// VALUES('Sitamarhi', '534','5'),
// VALUES('Siwan', '535','5'),
// VALUES('Supaul', '536','5'),
// VALUES('Vaishali', '537','5'),
// VALUES('West Champaran', '538','5');



// -- Chandigarh
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Chandigarh', '601','6'),
// VALUES('Mani Marja', '602','6');


// -- Chhattisgarh
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Bastar', '701','7'),
// VALUES('Bhilai', '702','7'),
// VALUES('Bijapur', '703','7'),
// VALUES('Bilaspur', '704','7'),
// VALUES('Dhamtari', '705','7'),
// VALUES('Durg', '706','7'),
// VALUES('Janjgir-Champa', '707','7'),
// VALUES('Jashpur', '708','7'),
// VALUES('Kabirdham-Kawardha', '709','7'),
// VALUES('Korba', '710','7'),
// VALUES('Korea', '711','7'),
// VALUES('Mahasamund', '712','7'),
// VALUES('Narayanpur', '713','7'),
// VALUES('Norh Bastar-Kanker', '714','7'),
// VALUES('Raigarh', '715','7'),
// VALUES('Raipur', '716','7'),
// VALUES('Rajnandgaon', '717','7'),
// VALUES('South Bastar-Dantewada', '718','7'),
// VALUES('Surguja', '719','7');


// -- Dadra & Nagar Haveli
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Amal', '801','8'),
// VALUES('Amli', '802','8'),
// VALUES('Bedpa', '803','8'),
// VALUES('Chikhli', '804','8'),
// VALUES('Dadra & Nagar Haveli', '805','8'),
// VALUES('Dahikhed', '806','8'),
// VALUES('Dolara', '807','8'),
// VALUES('Galonda', '808','8'),
// VALUES('Kanadi', '809','8'),
// VALUES('Karchond', '810','8'),
// VALUES('Khadoli', '811','8'),
// VALUES('Kharadpada', '812','8'),
// VALUES('Kherabari', '813','8'),
// VALUES('Kherdi', '814','8'),
// VALUES('Kothar', '815','8'),
// VALUES('Luari', '816','8'),
// VALUES('Mashat', '817','8'),
// VALUES('Rakholi', '818','8'),
// VALUES('Rudana', '819','8'),
// VALUES('Saili', '820','8'),
// VALUES('Sili', '821','8'),
// VALUES('Silvassa', '822','8'),
// VALUES('Sindavni', '823','8'),
// VALUES('Udva', '824','8'),
// VALUES('Umbarkoi', '825','8'),
// VALUES('Vansda', '826','8'),
// VALUES('Vasona', '827','8'),
// VALUES('Velugam', '828','8');


// -- Daman and Diu
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Brancavare', '901','9'),
// VALUES('Dagasi', '902','9'),
// VALUES('Daman', '903','9'),
// VALUES('Diu', '904','9'),
// VALUES('Magarvara', '905','9'),
// VALUES('Nagwa', '906','9'),
// VALUES('Pariali', '907','9'),
// VALUES('Passo Covo', '908','9');


// -- Delhi
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Central Delhi', '1001','10'),
// VALUES('East Delhi', '1002','10'),
// VALUES('New Delhi', '1003','10'),
// VALUES('North Delhi', '1004','10'),
// VALUES('North East Delhi', '1005','10'),
// VALUES('North West Delhi', '1006','10'),
// VALUES('Old Delhi', '1007','10'),
// VALUES('South Delhi', '1008','10'),
// VALUES('South West Delhi', '1009','10'),
// VALUES('West Delhi', '1010','10');

// --  Goa
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Canacona', '1101','11'),
// VALUES('Candolim', '1102','11'),
// VALUES('Chinchinim', '1103','11'),
// VALUES('Cortalim', '1104','11'),
// VALUES('Goa', '1105','11'),
// VALUES('Jua', '1106','11'),
// VALUES('Madgaon', '1107','11'),
// VALUES('Mahem', '1108','11'),
// VALUES('Mapuca', '1109','11'),
// VALUES('Marmagao', '1110','11'),
// VALUES('Panji', '1111','11'),
// VALUES('Ponda', '1112','11'),
// VALUES('Sanvordem', '1113','11'),
// VALUES('Terekhol', '1114','11');


// -- Gujarat
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Ahmedabad', '1201','12'),
// VALUES('Amreli', '1202','12'),
// VALUES('Anand', '1203','12'),
// VALUES('Banaskantha', '1204','12'),
// VALUES('Baroda', '1205','12'),
// VALUES('Bharuch', '1206','12'),
// VALUES('Bhavnagar', '1207','12'),
// VALUES('Dahod', '1208','12'),
// VALUES('Dang', '1209','12'),
// VALUES('Dwarka', '1210','12'),
// VALUES('Gandhinagar', '1211','12'),
// VALUES('Jamnagar', '1212','12'),
// VALUES('Junagadh', '1213','12'),
// VALUES('Kheda', '1214','12'),
// VALUES('Kutch', '1215','12'),
// VALUES('Mehsana', '1216','12'),
// VALUES('Nadiad', '1217','12'),
// VALUES('Narmada', '1218','12'),
// VALUES('Navsari', '1219','12'),
// VALUES('Panchmahals', '1220','12'),
// VALUES('Patan', '1221','12'),
// VALUES('Porbandar', '1222','12'),
// VALUES('Rajkot', '1223','12'),
// VALUES('Sabarkantha', '1224','12'),
// VALUES('Surat', '1225','12'),
// VALUES('Surendranagar', '1226','12'),
// VALUES('Vadodara', '1227','12'),
// VALUES('Valsad', '1228','12'),
// VALUES('Vapi', '1229','12');


// -- Haryana
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Ambala', '1301','13'),
// VALUES('Bhiwani', '1302','13'),
// VALUES('Faridabad', '1303','13'),
// VALUES('Fatehabad', '1304','13'),
// VALUES('Gurgaon', '1305','13'),
// VALUES('Hisar', '1306','13'),
// VALUES('Jhajjar', '1307','13'),
// VALUES('Jind', '1308','13'),
// VALUES('Kaithal', '1309','13'),
// VALUES('Karnal', '1310','13'),
// VALUES('Kurukshetra', '1311','13'),
// VALUES('Mahendragarh', '1312','13'),
// VALUES('Mewat', '1313','13'),
// VALUES('Panchkula', '1314','13'),
// VALUES('Panipat', '1315','13'),
// VALUES('Rewari', '1316','13'),
// VALUES('Rohtak', '1317','13'),
// VALUES('Sirsa', '1318','13'),
// VALUES('Sonipat', '1319','13'),
// VALUES('Yamunanagar', '1320','13');


// -- Himachal Pradesh
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Bilaspur', '1401','14'),
// VALUES('Chamba', '1402','14'),
// VALUES('Dalhousie', '1403','14'),
// VALUES('Hamirpur', '1404','14'),
// VALUES('Kangra', '1405','14'),
// VALUES('Kinnaur', '1406','14'),
// VALUES('Kullu', '1407','14'),
// VALUES('Lahaul & Spiti', '1408','14'),
// VALUES('Mandi', '1409','14'),
// VALUES('Shimla', '1410','14'),
// VALUES('Sirmaur', '1411','14'),
// VALUES('Solan', '1412','14'),
// VALUES('Una', '1413','14');



// -- Jammu & Kashmir
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Anantnag', '1501','15'),
// VALUES('Baramulla', '1502','15'),
// VALUES('Budgam', '1503','15'),
// VALUES('Doda', '1504','15'),
// VALUES('Jammu', '1505','15'),
// VALUES('Kargil', '1506','15'),
// VALUES('Kathua', '1507','15'),
// VALUES('Kupwara', '1508','15'),
// VALUES('Leh', '1509','15'),
// VALUES('Poonch', '1510','15'),
// VALUES('Pulwama', '1511','15'),
// VALUES('Rajauri', '1512','15'),
// VALUES('Srinagar', '1513','15'),
// VALUES('Udhampur', '1514','15');



// -- Jharkhand
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Bokaro', '1601','16'),
// VALUES('Chatra', '1602','16'),
// VALUES('Deoghar', '1603','16'),
// VALUES('Dhanbad', '1604','16'),
// VALUES('Dumka', '1605','16'),
// VALUES('East Singhbhum', '1606','16'),
// VALUES('Garhwa', '1607','16'),
// VALUES('Giridih', '1608','16'),
// VALUES('Godda', '1609','16'),
// VALUES('Gumla', '1610','16'),
// VALUES('Hazaribag', '1611','16'),
// VALUES('Jamtara', '1612','16'),
// VALUES('Koderma', '1613','16'),
// VALUES('Latehar', '1614','16'),
// VALUES('Lohardaga', '1615','16'),
// VALUES('Pakur', '1616','16'),
// VALUES('Palamu', '1617','16'),
// VALUES('Ranchi', '1618','16'),
// VALUES('Sahibganj', '1619','16'),
// VALUES('Seraikela', '1620','16'),
// VALUES('Simdega', '1621','16'),
// VALUES('West Singhbhum', '1622','16');


// -- Karnataka
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Bagalkot', '1701','17'),
// VALUES('Bangalore', '1702','17'),
// VALUES('Bangalore Rural', '1703','17'),
// VALUES('Belgaum', '1704','17'),
// VALUES('Bellary', '1705','17'),
// VALUES('Bhatkal', '1706','17'),
// VALUES('Bidar', '1707','17'),
// VALUES('Bijapur', '1708','17'),
// VALUES('Chamrajnagar', '1709','17'),
// VALUES('Chickmagalur', '1710','17'),
// VALUES('Chikballapur', '1711','17'),
// VALUES('Chitradurga', '1712','17'),
// VALUES('Dakshina Kannada', '1713','17'),
// VALUES('Davanagere', '1714','17'),
// VALUES('Dharwad', '1715','17'),
// VALUES('Gadag', '1716','17'),
// VALUES('Gulbarga', '1717','17'),
// VALUES('Hampi', '1718','17'),
// VALUES('Hassan', '1719','17'),
// VALUES('Haveri', '1720','17'),
// VALUES('Hospet', '1721','17'),
// VALUES('Karwar', '1722','17'),
// VALUES('Kodagu', '1723','17'),
// VALUES('Kolar', '1724','17'),
// VALUES('Koppal', '1725','17'),
// VALUES('Madikeri', '1726','17'),
// VALUES('Mandya', '1727','17'),
// VALUES('Mangalore', '1728','17'),
// VALUES('Manipal', '1729','17'),
// VALUES('Mysore', '1730','17'),
// VALUES('Raichur', '1731','17'),
// VALUES('Shimoga', '1732','17'),
// VALUES('Sirsi', '1733','17'),
// VALUES('Sringeri', '1734','17'),
// VALUES('Srirangapatna', '1735','17'),
// VALUES('Tumkur', '1736','17'),
// VALUES('Udupi', '1737','17'),
// VALUES('Uttara Kannada', '1738','17');


// -- Kerala
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Alappuzha', '1801','18'),
// VALUES('Alleppey', '1802','18'),
// VALUES('Alwaye', '1803','18'),
// VALUES('Ernakulam', '1804','18'),
// VALUES('Idukki', '1805','18'),
// VALUES('Kannur', '1806','18'),
// VALUES('Kasargod', '1807','18'),
// VALUES('Kochi', '1808','18'),
// VALUES('Kollam', '1809','18'),
// VALUES('Kottayam', '1810','18'),
// VALUES('Kovalam', '1811','18'),
// VALUES('Kozhikode', '1812','18'),
// VALUES('Malappuram', '1813','18'),
// VALUES('Palakkad', '1814','18'),
// VALUES('Pathanamthitta', '1815','18'),
// VALUES('Perumbavoor', '1816','18'),
// VALUES('Thiruvananthapuram', '1817','18'),
// VALUES('Thrissur', '1818','18'),
// VALUES('Trichur', '1819','18'),
// VALUES('Trivandrum', '1820','18'),
// VALUES('Wayanad', '1821','18');


// -- Lakshadweep
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Agatti Island', '1901','19'),
// VALUES('Bingaram Island', '1902','19'),
// VALUES('Bitra Island', '1903','19'),
// VALUES('Chetlat Island', '1904','19'),
// VALUES('Kadmat Island', '1905','19'),
// VALUES('Kalpeni Island', '1906','19'),
// VALUES('Kavaratti Island', '1907','19'),
// VALUES('Kiltan Island', '1908','19'),
// VALUES('Lakshadweep Sea', '1909','19'),
// VALUES('Minicoy Island', '1910','19'),
// VALUES('North Island', '1911','19'),
// VALUES('South Island', '1912','19');


// -- Madhya Pradesh
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Anuppur', '2001','20'),
// VALUES('Ashoknagar', '2002','20'),
// VALUES('Balaghat', '2003','20'),
// VALUES('Barwani', '2004','20'),
// VALUES('Betul', '2005','20'),
// VALUES('Bhind', '2006','20'),
// VALUES('Bhopal', '2007','20'),
// VALUES('Burhanpur', '2008','20'),
// VALUES('Chhatarpur', '2009','20'),
// VALUES('Chhindwara', '2010','20'),
// VALUES('Damoh', '2011','20'),
// VALUES('Datia', '2012','20'),
// VALUES('Dewas', '2013','20'),
// VALUES('Dhar', '2014','20'),
// VALUES('Dindori', '2015','20'),
// VALUES('Guna', '2016','20'),
// VALUES('Gwalior', '2017','20'),
// VALUES('Harda', '2018','20'),
// VALUES('Hoshangabad', '2019','20'),
// VALUES('Indore', '2020','20'),
// VALUES('Jabalpur', '2021','20'),
// VALUES('Jagdalpur', '2022','20'),
// VALUES('Jhabua', '2023','20'),
// VALUES('Katni', '2024','20'),
// VALUES('Khandwa', '2025','20'),
// VALUES('Khargone', '2026','20'),
// VALUES('Mandla', '2027','20'),
// VALUES('Mandsaur', '2028','20'),
// VALUES('Morena', '2029','20'),
// VALUES('Narsinghpur', '2030','20'),
// VALUES('Neemuch', '2031','20'),
// VALUES('Panna', '2032','20'),
// VALUES('Raisen', '2033','20'),
// VALUES('Rajgarh', '2034','20'),
// VALUES('Ratlam', '2035','20'),
// VALUES('Rewa', '2036','20'),
// VALUES('Sagar', '2037','20'),
// VALUES('Satna', '2038','20'),
// VALUES('Sehore', '2039','20'),
// VALUES('Seoni', '2040','20'),
// VALUES('Shahdol', '2041','20'),
// VALUES('Shajapur', '2042','20'),
// VALUES('Sheopur', '2043','20'),
// VALUES('Shivpuri', '2044','20'),
// VALUES('Sidhi', '2045','20'),
// VALUES('Tikamgarh', '2046','20'),
// VALUES('Ujjain', '2047','20'),
// VALUES('Umaria', '2048','20'),
// VALUES('Vidisha', '2049','20');



// -- Maharashtra
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Ahmednagar', '2101','21'),
// VALUES('Akola', '2102','21'),
// VALUES('Amravati', '2103','21'),
// VALUES('Aurangabad', '2104','21'),
// VALUES('Beed', '2105','21'),
// VALUES('Bhandara', '2106','21'),
// VALUES('Buldhana', '2107','21'),
// VALUES('Chandrapur', '2108','21'),
// VALUES('Dhule', '2109','21'),
// VALUES('Gadchiroli', '2110','21'),
// VALUES('Gondia', '2111','21'),
// VALUES('Hingoli', '2112','21'),
// VALUES('Jalgaon', '2113','21'),
// VALUES('Jalna', '2114','21'),
// VALUES('Kolhapur', '2115','21'),
// VALUES('Latur', '2116','21'),
// VALUES('Mahabaleshwar', '2117','21'),
// VALUES('Mumbai', '2118','21'),
// VALUES('Mumbai City', '2119','21'),
// VALUES('Mumbai Suburban', '2120','21'),
// VALUES('Nagpur', '2121','21'),
// VALUES('Nanded', '2122','21'),
// VALUES('Nandurbar', '2123','21'),
// VALUES('Nashik', '2124','21'),
// VALUES('Osmanabad', '2125','21'),
// VALUES('Parbhani', '2126','21'),
// VALUES('Pune', '2127','21'),
// VALUES('Raigad', '2128','21'),
// VALUES('Ratnagiri', '2129','21'),
// VALUES('Sangli', '2130','21'),
// VALUES('Satara', '2131','21'),
// VALUES('Sholapur', '2132','21'),
// VALUES('Sindhudurg', '2133','21'),
// VALUES('Thane', '2134','21'),
// VALUES('Wardha', '2135','21'),
// VALUES('Washim', '2136','21'),
// VALUES('Yavatmal', '2137','21');


// -- Manipur
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Bishnupur', '2201','22'),
// VALUES('Chandel', '2202','22'),
// VALUES('Churachandpur', '2203','22'),
// VALUES('Imphal East', '2204','22'),
// VALUES('Imphal West', '2205','22'),
// VALUES('Senapati', '2206','22'),
// VALUES('Tamenglong', '2207','22'),
// VALUES('Thoubal', '2208','22'),
// VALUES('Ukhrul', '2209','22');



// -- Meghalaya
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('East Garo Hills', '2301','23'),
// VALUES('East Khasi Hills', '2302','23'),
// VALUES('Jaintia Hills', '2303','23'),
// VALUES('Ri Bhoi', '2304','23'),
// VALUES('Shillong', '2305','23'),
// VALUES('South Garo Hills', '2306','23'),
// VALUES('West Garo Hills', '2307','23'),
// VALUES('West Khasi Hills', '2308','23');



// -- Mizoram
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Aizawl', '2401','24'),
// VALUES('Champhai', '2402','24'),
// VALUES('Kolasib', '2403','24'),
// VALUES('Lawngtlai', '2404','24'),
// VALUES('Lunglei', '2405','24'),
// VALUES('Mamit', '2406','24'),
// VALUES('Saiha', '2407','24'),
// VALUES('Serchhip', '2408','24');


// -- Nagaland
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Dimapur', '2501','25'),
// VALUES('Kohima', '2502','25'),
// VALUES('Mokokchung', '2503','25'),
// VALUES('Mon', '2504','25'),
// VALUES('Phek', '2505','25'),
// VALUES('Tuensang', '2506','25'),
// VALUES('Wokha', '2507','25'),
// VALUES('Zunheboto', '2508','25');



// -- Orissa
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Angul', '2601','26'),
// VALUES('Balangir', '2602','26'),
// VALUES('Balasore', '2603','26'),
// VALUES('Baleswar', '2604','26'),
// VALUES('Bargarh', '2605','26'),
// VALUES('Berhampur', '2606','26'),
// VALUES('Bhadrak', '2607','26'),
// VALUES('Bhubaneswar', '2608','26'),
// VALUES('Boudh', '2609','26'),
// VALUES('Cuttack', '2610','26'),
// VALUES('Deogarh', '2611','26'),
// VALUES('Dhenkanal', '2612','26'),
// VALUES('Gajapati', '2613','26'),
// VALUES('Ganjam', '2614','26'),
// VALUES('Jagatsinghapur', '2615','26'),
// VALUES('Jajpur', '2616','26'),
// VALUES('Jharsuguda', '2617','26'),
// VALUES('Kalahandi', '2618','26'),
// VALUES('Kandhamal', '2619','26'),
// VALUES('Kendrapara', '2620','26'),
// VALUES('Kendujhar', '2621','26'),
// VALUES('Khordha', '2622','26'),
// VALUES('Koraput', '2623','26'),
// VALUES('Malkangiri', '2624','26'),
// VALUES('Mayurbhanj', '2625','26'),
// VALUES('Nabarangapur', '2626','26'),
// VALUES('Nayagarh', '2627','26'),
// VALUES('Nuapada', '2628','26'),
// VALUES('Puri', '2629','26'),
// VALUES('Rayagada', '2630','26'),
// VALUES('Rourkela', '2631','26'),
// VALUES('Sambalpur', '2632','26'),
// VALUES('Subarnapur', '2633','26'),
// VALUES('Sundergarh', '2634','26');


// -- Pondicherry
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Bahur', '2701','27'),
// VALUES('Karaikal', '2701','27'),
// VALUES('Mahe', '2701','27'),
// VALUES('Pondicherry', '2701','27'),
// VALUES('Purnankuppam', '2701','27'),
// VALUES('Valudavur', '2701','27'),
// VALUES('Villianur', '2701','27'),
// VALUES('Yanam', '2701','27');



// -- Punjab
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Amritsar', '2801','28'),
// VALUES('Barnala', '2801','28'),
// VALUES('Bathinda', '2801','28'),
// VALUES('Faridkot', '2801','28'),
// VALUES('Fatehgarh Sahib', '2801','28'),
// VALUES('Ferozepur', '2801','28'),
// VALUES('Gurdaspur', '2801','28'),
// VALUES('Hoshiarpur', '2801','28'),
// VALUES('Jalandhar', '2801','28'),
// VALUES('Kapurthala', '2801','28'),
// VALUES('Ludhiana', '2801','28'),
// VALUES('Mansa', '2801','28'),
// VALUES('Moga', '2801','28'),
// VALUES('Muktsar', '2801','28'),
// VALUES('Nawanshahr', '2801','28'),
// VALUES('Pathankot', '2801','28'),
// VALUES('Patiala', '2801','28'),
// VALUES('Rupnagar', '2801','28'),
// VALUES('Sangrur', '2801','28'),
// VALUES('SAS Nagar', '2801','28'),
// VALUES('Tarn Taran', '2801','28');




// -- Rajasthan
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Ajmer', '2901','29'),
// VALUES('Alwar', '2902','29'),
// VALUES('Banswara', '2903','29'),
// VALUES('Baran', '2904','29'),
// VALUES('Barmer', '2905','29'),
// VALUES('Bharatpur', '2906','29'),
// VALUES('Bhilwara', '2907','29'),
// VALUES('Bikaner', '2908','29'),
// VALUES('Bundi', '2909','29'),
// VALUES('Chittorgarh', '2910','29'),
// VALUES('Churu', '2911','29'),
// VALUES('Dausa', '2912','29'),
// VALUES('Dholpur', '2913','29'),
// VALUES('Dungarpur', '2914','29'),
// VALUES('Hanumangarh', '2915','29'),
// VALUES('Jaipur', '2916','29'),
// VALUES('Jaisalmer', '2917','29'),
// VALUES('Jalore', '2918','29'),
// VALUES('Jhalawar', '2919','29'),
// VALUES('Jhunjhunu', '2920','29'),
// VALUES('Jodhpur', '2921','29'),
// VALUES('Karauli', '2922','29'),
// VALUES('Kota', '2923','29'),
// VALUES('Nagaur', '2924','29'),
// VALUES('Pali', '2925','29'),
// VALUES('Pilani', '2926','29'),
// VALUES('Rajsamand', '2927','29'),
// VALUES('Sawai Madhopur', '2928','29'),
// VALUES('Sikar', '2929','29'),
// VALUES('Sirohi', '2930','29'),
// VALUES('Sri Ganganagar', '2931','29'),
// VALUES('Tonk', '2932','29'),
// VALUES('Udaipur', '2933','29');


// -- Sikkim
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Barmiak', '3001','30'),
// VALUES('Be', '3002','30'),
// VALUES('Bhurtuk', '3003','30'),
// VALUES('Chhubakha', '3004','30'),
// VALUES('Chidam', '3005','30'),
// VALUES('Chubha', '3006','30'),
// VALUES('Chumikteng', '3007','30'),
// VALUES('Dentam', '3008','30'),
// VALUES('Dikchu', '3009','30'),
// VALUES('Dzongri', '3010','30'),
// VALUES('Gangtok', '3011','30'),
// VALUES('Gauzing', '3012','30'),
// VALUES('Gyalshing', '3013','30'),
// VALUES('Hema', '3014','30'),
// VALUES('Kerung', '3015','30'),
// VALUES('Lachen', '3016','30'),
// VALUES('Lachung', '3017','30'),
// VALUES('Lema', '3018','30'),
// VALUES('Lingtam', '3019','30'),
// VALUES('Lungthu', '3020','30'),
// VALUES('Mangan', '3021','30'),
// VALUES('Namchi', '3022','30'),
// VALUES('Namthang', '3023','30'),
// VALUES('Nanga', '3024','30'),
// VALUES('Nantang', '3025','30'),
// VALUES('Naya Bazar', '3026','30'),
// VALUES('Padamachen', '3027','30'),
// VALUES('Pakhyong', '3028','30'),
// VALUES('Pemayangtse', '3029','30'),
// VALUES('Phensang', '3030','30'),
// VALUES('Rangli', '3031','30'),
// VALUES('Rinchingpong', '3032','30'),
// VALUES('Sakyong', '3033','30'),
// VALUES('Samdong', '3034','30'),
// VALUES('Singtam', '3035','30'),
// VALUES('Siniolchu', '3035','30'),
// VALUES('Sombari', '3036','30'),
// VALUES('Soreng', '3037','30'),
// VALUES('Sosing', '3038','30'),
// VALUES('Tekhug', '3039','30'),
// VALUES('Temi', '3040','30'),
// VALUES('Tsetang', '3041','30'),
// VALUES('Tsomgo', '3042','30'),
// VALUES('Tumlong', '3043','30'),
// VALUES('Yangang', '3044','30'),
// VALUES('Yumtang', '3045','30');



// -- Tamil Nadu
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Chennai', '3101','31'),
// VALUES('Chidambaram', '3102','31'),
// VALUES('Chingleput', '3103','31'),
// VALUES('Coimbatore', '3104','31'),
// VALUES('Courtallam', '3105','31'),
// VALUES('Cuddalore', '3106','31'),
// VALUES('Dharmapuri', '3107','31'),
// VALUES('Dindigul', '3108','31'),
// VALUES('Erode', '3109','31'),
// VALUES('Hosur', '3110','31'),
// VALUES('Kanchipuram', '3111','31'),
// VALUES('Kanyakumari', '3112','31'),
// VALUES('Karaikudi', '3113','31'),
// VALUES('Karur', '3114','31'),
// VALUES('Kodaikanal', '3115','31'),
// VALUES('Kovilpatti', '3116','31'),
// VALUES('Krishnagiri', '3117','31'),
// VALUES('Kumbakonam', '3118','31'),
// VALUES('Madurai', '3119','31'),
// VALUES('Mayiladuthurai', '3120','31'),
// VALUES('Nagapattinam', '3121','31'),
// VALUES('Nagarcoil', '3122','31'),
// VALUES('Namakkal', '3123','31'),
// VALUES('Neyveli', '3124','31'),
// VALUES('Nilgiris', '3125','31'),
// VALUES('Ooty', '3126','31'),
// VALUES('Palani', '3127','31'),
// VALUES('Perambalur', '3128','31'),
// VALUES('Pollachi', '3129','31'),
// VALUES('Pudukkottai', '3130','31'),
// VALUES('Rajapalayam', '3131','31'),
// VALUES('Ramanathapuram', '3132','31'),
// VALUES('Salem', '3133','31'),
// VALUES('Sivaganga', '3134','31'),
// VALUES('Sivakasi', '3135','31'),
// VALUES('Thanjavur', '3136','31'),
// VALUES('Theni', '3137','31'),
// VALUES('Thoothukudi', '3138','31'),
// VALUES('Tiruchirappalli', '3139','31'),
// VALUES('Tirunelveli', '3140','31'),
// VALUES('Tirupur', '3141','31'),
// VALUES('Tiruvallur', '3142','31'),
// VALUES('Tiruvannamalai', '3143','31'),
// VALUES('Tiruvarur', '3144','31'),
// VALUES('Trichy', '3145','31'),
// VALUES('Tuticorin', '3146','31'),
// VALUES('Vellore', '3147','31'),
// VALUES('Villupuram', '3148','31'),
// VALUES('Virudhunagar', '3149','31'),
// VALUES('Yercaud', '3150','31');



// -- Tripura
// INSERT INTO master_cities (city_name,city_code,city_state_code)
// VALUES('Agartala', '3201','32'),
// VALUES('Ambasa', '3202','32'),
// VALUES('Bampurbari', '3203','32'),
// VALUES('Belonia', '3204','32'),
// VALUES('Dhalai', '3205','32'),
// VALUES('Dharam Nagar', '3206','32'),
// VALUES('Kailashahar', '3207','32'),
// VALUES('Kamal Krishnabari', '3208','32'),
// VALUES('Khopaiyapara', '3209','32'),
// VALUES('Khowai', '3210','32'),
// VALUES('Phuldungsei', '3211','32'),
// VALUES('Radha Kishore Pur', '3212','32'),
// VALUES('Tripura', '3213','32');





