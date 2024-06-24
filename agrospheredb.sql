-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 05:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrospheredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(150) NOT NULL,
  `auserid` int(11) NOT NULL,
  `apass` varchar(100) NOT NULL,
  `aprofilepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `auserid`, `apass`, `aprofilepic`) VALUES
(1, 'Archana P M', 12453, 'Archana@12', 'achuimage.jpg\r\n'),
(2, 'Jithin Saji', 13061, 'Jithin@31', 'jithinimage.jpg\r\n'),
(3, 'Navaneeth Vijayan', 12450, 'Navaneeth@39', 'WhatsApp Image 2023-06-20 at 20.24.29.jpg'),
(4, 'Navin Sebastian', 13065, 'Navin@40', 'Navinimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cropdata`
--

CREATE TABLE `cropdata` (
  `cid` int(11) NOT NULL,
  `cname` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cdesc` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cimage1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cimage2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cimage3` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cvarieties` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cclimate` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `csoil` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cprep` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cseason` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cfertilisers` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cweedcontrol` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cdisease` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cmisc` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cropdata`
--

INSERT INTO `cropdata` (`cid`, `cname`, `cdesc`, `cimage1`, `cimage2`, `cimage3`, `cvarieties`, `cclimate`, `csoil`, `cprep`, `cseason`, `cfertilisers`, `cweedcontrol`, `cdisease`, `cmisc`, `ctime`) VALUES
(41, 'Pepper', 'Black pepper (Piper nigrum) is a flowering vine in the family Piperaceae, cultivated for its fruit (the peppercorn), which is usually dried and used as a spice and seasoning. The fruit is a drupe (stonefruit) which is about 5 mm (0.20 in) in diameter (fresh and fully mature), dark red, and contains a stone which encloses a single pepper seed. Peppercorns and the ground pepper derived from them may be described simply as pepper, or more precisely as black pepper (cooked and dried unripe fruit), green pepper (dried unripe fruit), or white pepper (ripe fruit seeds).\r\n\r\n', 'pepper1.jpg', 'pepper new.jpg', 'pepper1.jpg', 'Over 75 cultivars of black pepper are being cultivated in India. Karimunda is the most popular cultivar in Kerala. The other important cultivars are Kottanadan (South Kerala), Narayakodi (Central Kerala), Aimpiriyan (Wynad), Neelamundi (Idukki), Kuthiravally (Kozhikode and Idukki), Balancotta, Kalluvally (North Kerala), Malligesara and Uddagare (Karnataka). Kuthiravally and Balancotta exhibit alternate bearing habit. In terms of quality, Kottanadan has the highest oleoresin (17.8%) content follo', 'Black pepper is a plant of humid tropics requiring high rainfall and humidity. The hot and humid climate of sub mountainous tracts of Western Ghats is ideal for its cultivation. It grows successfully between 20° North and South latitude, and from sea level up to 1500 m above sea level. The crop tolerates temperatures between 10° and 40°C. The ideal temperature is 23 -32°C with an average of 28°C.\r\n', 'Optimum soil temperature for root growth is 26-28°C. A well distributed annual rainfall of 125-200 cm is considered ideal for black pepper. Black pepper can be grown in a wide range of soils with a pH of 5.5 to 6.5, though in its natural habitat it thrives well in red laterite soils\r\n', 'Sloping soil and water conservation measures in the areas of sufficient size to take when preparing to land.\r\n\r\n', 'Grow peppers in a space with full sun and well-draining moist (but not wet) soil. A balance between sandy and loamy soil will ensure that the soil drains well and warms quickly. Mix large amounts of organic matter (such as compost) into the soil, especially if you are working with heavy clay.\r\nAvoid planting peppers in places where you’ve recently grown other nightshade family members—such as tomatoes, potatoes, or eggplants—as this can expose peppers to disease.\r\nTo start peppers indoors in pots, sow seeds 8 to 10 weeks before your last spring frost date. \r\nPlant pepper starts or transplants outdoors about 2 to 3 weeks after the threat of frost has passed and the soil has reached 65°F (18°C).\r\n', 'Apply cattle manure or Compost @ 10 kg/vine just before the onset of South West monsoon.  In addition 100 g of N, 40 g of P and 140 g of K per vine are applied in two split doses in the months of May - June and in September - October.  Slaked lime at 500 g per vine is applied in alternate years during May - June.Apply Azospirillum @ 100 g/vine one month after the application of chemical fertilizers. Integrated nutrient management - Inorganic N 50 % of the recommended dose + FYM 10 kg + 50 g Azospirillum + 50 g Phosphobacteria + 200 g VAM per plant.The manures and fertilizers are applied around the vine at a distance of 30 cm from the base and incorporated into the soil.\r\n\r\n', 'Flaming\r\nThe slow emergence of direct-seeded peppers can be used as an advantage for weed control purposes. Weeds generally germinate earlier than peppers and these weeds can be controlled by flaming the beds with propane burners. In order to kill the maximum amount of emerged weeds, flame when 1 to 3% of the pepper plants begin to emerge. Timing is critical: only a 1- or 2-day window exists for flaming once the pepper seedlings are ready to emerge because any emerged seedlings will be killed by the process. Flaming will control most broadleaf weeds when they are in the two- to four-true leaf stage; however, many grasses and volunteer cereals will not be effectively controlled. Pepper seed that has been primed germinates too fast; as a result, fields planted with primed seed cannot safely be flamed.\r\n\r\nHerbicides\r\nIn direct-seeded peppers, paraquat (Gramoxone Inteon), carfentrazone (Shark), and pelargonic acid (Scythe) can be applied to the flush of weeds that emerge before the emergen', 'Mosaic Virus\r\nThis is a common virus that affects more than 150 types of plants, including fruits, vegetables, and flowers. This disease is mainly spread by insects, specifically aphids, and leafhoppers.\r\n\r\nLeaf spots\r\nIf your pepper plant has leaf spots, this means that your plant has a limited, discolored, diseased area of a leaf. These spots are caused by fungus and can be found in both your outdoor garden and indoor houseplants.\r\n\r\nEssentially, fungal spores in the air find a warm, wet plant surface to attach to. Once it attaches, the fungus begins to reproduce, which leads to tiny, brown fungal leaf spots.\r\n\r\n\r\nBlight\r\nBlight is a fungal disease that spreads through spores blown in the wind from one area to another. This allows the infection to spread rapidly on plants. Early signs of blight can be hard to spot, but brown patches on the leaves and stem tend to appear quickly.\r\n\r\n\r\n', 'Causes of calcium deficiency may include:\r\nLack of calcium in the soil\r\nOver-watering\r\nPeriods of drought followed by an excess of water\r\nAn excess of nitrogen, potassium, sodium, or ammonium\r\nMildew\r\nPowdery mildew can affect the leaves on a pepper plant. It’s important to note that while mildew often occurs on older leaves, it can develop at any stage of crop development. A patchy, white powdery growth that eventually covers the entire lower leaf surface can characterize mildew on pepper plants.\r\n\r\nThe edges of the infected leaves might roll upwards, exposing fungal growth. As a result, the diseased leaves drop from the plants and leave the pepper plant exposed to the sun. This exposure can result in sunburn.\r\n\r\n\r\nCommon pepper problems\r\nBeyond common pepper plant diseases, peppers can face various problems while growing. Some impact the plant itself, while others impact the fruit. Common problems include:\r\n\r\nPests/Infestations\r\nPests and infestations are a common problem for pepper ', '2023-10-18 15:33:45'),
(42, 'Tomato', 'The tomato  is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America.The Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived. Its domestication and use as a cultivated food may have originated with the indigenous peoples of Mexico. The Aztecs used tomatoes in their cooking at the time of the Spanish conquest of the Aztec Empire, and after the Spanish encountered the tomato for the first time after their contact with the Aztecs, they brought the plant to Europe, in a widespread transfer of plants known as the Columbian exchange. From there, the tomato was introduced to other parts of the European-colonized world during the 16th century.\r\n', 'tomato1.jpg', 'tomato2.jpg', 'tomato3.jpg', 'There are more than 15000 varieties of tomato in the world. There are more than 1000 varieties of tomatoes cultivated in India. However, only a few are commercially available and others are consumed locally. Several seed companies have bred the tomatoes further and have brought out new varieties with specific attributes. \r\n\r\nArka Abhijith: Arka Abhijith is a high yielding F1 hybrid tomato variety developed by IIHR Bangalore. It is developed for the fresh market. The fruit weighs about 65-70g. Th', 'Tomato is warm season crop. Grows well is those retain that are free from frost. It can’t be grown successfully in places of higher rainfall. Temperature after tomato crops in following ways.\r\n\r\n1. Optimum temperature for seed germination is 26 to 320C.\r\n\r\n2. The optimum temperature required for its cultivation is 15 – 270C. At higher temperature its blossoms drops off. The damages great when high temp is combined with dry wind. It will result in the failure of fruit set due to drying of stigmatic liquid.\r\n \r\n3. Colour development: In tomato red colour is due the pigment Lycopene. Lycopene is highest at 18 to 260C while production of this pigment drops off rapidly above 300C and ‘nil’ above 400C\r\n\r\n4. Carothe is developed rapidly at high temperature.\r\n\r\n5. If fruits exposed to direct sunlight, their tops may turn whitish yellow & become leathery in texture. This is common in late varietes during summer season. This condition is known as sun – scald.\r\n\r\n6. A warm, sunny weather is most ', 'Sandy loam soil with a well drained clay sub soil is best suited. Light soils are good for early variety. While clay loan or silt loam soils are well suited for heavy yield (Late variety), grows at pH 6.0 to 7.0 satisfactorily. The soil should be well prepared & leveled by ploughing the land 4 – 5 times\r\n', 'Deep ploughing is recommended which is to be followed by cross cultivation with cultivator. The land needs to be levelled before transplanting of the tomato Land preparation is the first step before planting tomatoes. Almost all tomatoes are planted on raised beds in some countries.\r\nThis facilitates cultivation and irrigation of the tomato crop, as well as improving drainage, which minimizes root diseases. Land preparation consists of proper grading (particularly if furrow irrigation is used), subsoiling to break up compacted layers, listing, and final bed preparation. Tomato beds are most often 60 or 66 inches wide.\r\n', 'Tomato plants need night temperature above 32°F and daytime temperatures above 60°F. They are readily killed by a light frost.\r\nA week of cool daytime temperatures (below 55°F) will stunt plants, reducing yields.\r\n\r\n1) For rainy-autumn crop. The seeds are sown in the months of June and July while transplanting is done in the months of July and August.\r\n\r\n2) For autumn-winter crop the seeds are sown in the months of September-October while transplanting is done in the months of October and November.\r\n\r\n3) For spring-summer crop the seeds are sown in the months of January-February and transplanting is done in the months of February and March.\r\nIn hills the seed sowing depends upon the elevation of the place. On lower hills the seeds are sown in February-March while on higher hills in the months of March and April.\r\n\r\n', 'Adding Manure to Your Soil\r\nIf you have access to manure, dig it into the compost you have bought or made. And, once you have dug everything into your soil, measure it to see if additional elements need to be added. Manure will generally add nitrogen; bone meal, which you can buy bagged, contains lots of phosphorous; and both seaweed and wood ash will add potassium to the soil.\r\n\r\nAdding Horse Manure\r\nThe top choice here is horse manure, which many stable yards throw out. If combined with straw and/or wood shavings used for bedding, you will have the added value of mulch.\r\nUnless it contains a lot of urine, horse manure can be dug directly into the soil. However, if you have the space and time, pile it and let it ferment for a period of months (the longer the better), and you will end up with lovely black, rich compost.\r\n\r\nAdding Poultry Droppings\r\nPoultry droppings are hot and smelly and should be used with care as they can burn plants. It should, in any case, be left in a heap, cover', 'Effective weed management in tomatoes involves crop rotation practices, cultivation, proper field preparation, sanitation, irrigation management, and proper selection of herbicides. When combined with good cultural practices, available herbicides can control many of the weed species that are found in tomato fields. Herbicide choice depends on the weed species that are present, the cultural practices followed by the grower, and the crops planted following tomato.\r\nIn tomato production, many growers establish beds in fall to facilitate early spring planting; some beds may be treated with an herbicide at this time. Herbicides may also be applied several weeks before planting, at the time of planting, after planting but before crop and weed emergence, after crop and weed emergence, or after thinning or transplanting. Herbicides can be classified according to their use as preemergence (controls weeds after the seeds germinate but before they emerge from the soil and usually provides residua', 'BLACKENED FRUIT ENDS\r\n\r\nThis is likely due to blossom end rot, which signals a calcium deficiency. Uneven watering practices, too much nitrogen, and temperature fluctuations are contributing factors.\r\n\r\nSolutions:\r\n\r\nDispose of affected fruits and provide regular, deep waterings.\r\nUse a fertilizer that is lower in nitrogen and high in phosphorus.\r\nCheck your soil pH before the growing season and adjust calcium content by adding lime, gypsum, or crushed eggshells to the soil.\r\n\r\nBLOSSOM DROP\r\n\r\nFlowers drop off the plant without fruit development. This is usually caused by extreme temperature fluctuations. Tomatoes need nighttime temperatures between 55-75 degrees F to successfully set flowers and fruit. Other causes include not enough water, insect damage, lack of pollination, and too much or too little nitrogen.\r\n\r\nSolutions:\r\n\r\nUse warming aids on cooler nights.\r\nAdjust watering and fertilizer.\r\nPlant tomato companion plants or flowers nearby to deter pests and attract pollinators\r\n\r', 'The Aztecs used tomatoes in their cooking at the time of the Spanish conquest of the Aztec Empire, and after the Spanish encountered the tomato for the first time after their contact with the Aztecs, they brought the plant to Europe,.', '2023-10-18 15:33:45'),
(43, 'Plantain', 'Cooking bananas are banana cultivars in the genus Musa whose fruits are generally used in cooking. They may be eaten ripe or unripe and are generally starchy.Many cooking bananas are referred to as plantains  or green bananas. In botanical usage, the term \"plantain\" is used only for true plantains, while other starchy cultivars used for cooking are called \"cooking bananas\". True plantains are cultivars belonging to the AAB group, while cooking bananas are any cultivars belonging to AAB, AAA, ABB, or BBB groups. The currently accepted scientific name for all such cultivars in these groups is Musa × paradisiaca.Fe i bananas (Musa × troglodytarum) from the Pacific Islands are often eaten roasted or boiled, and are thus informally referred to as \"mountain plantains\", but they do not belong to any of the species from which all modern banana cultivars are descended.\r\n', 'plantain1.jpg', 'plantain2.jpg', 'plantain1.jpg', 'Dwarf cavendish: It is the main commercial variety cultivated in Maharashtra, Bihar, Gujarat, and West Bengal for both table and processing purposes. It is also cultivated in Karnataka, Andhra Pradesh, and Tamil Nadu. ‘Basrai’ is one of the most popular commercial Indian banana varieties. It is one of the most preferred banana varieties in Maharashtra. The bunch size, length, and size of the Fruit are all nice, but the keeping quality is low. The usual bunch weight is 15-25 kg with 6-7 hands and', 'The major banana-growing areas of the world are geographically situated between the equator and latitudes 200 North and 200 South.\r\nConditions in this area are mainly tropical, with temperature fluctuations from day to night and from summer to winter being comparatively small.\r\nBanana is essentially a humid tropical plant, coming up well in regions with a temperature range of 10° C to 40° C and an average of 23° C. In cooler climate the duration is extended, sucker production is affected and bunches are smaller. The growth of the banana plant responds quickly, within a matter of an hour or two to changes in air temperature. All growth ceases as soon as the temperature of the surrounding air falls below 11° C.\r\nAs long as the temperature remains 11° C, no growth whatsoever takes place. As the air temperature rises above 11° C growth starts and the growth rate increases gradually at first, and then with rising temperatures, more and more rapidly.\r\nThe biggest increase in growth rate for ', 'Banana can grow from the poorest to the richest type of soil with varying success.\r\n\r\nThe soil should be tested before banana cultivation\r\n\r\nThe soil should have good drainage, adequate fertility and moisture.\r\n\r\nDeep, rich loamy  and salty clay loam soil with pH between 6-7.5 is most preferred for banana cultivation.\r\n\r\nIll drained, poorly aerated and nutritionally deficient soils are not suitable for banana.\r\n\r\nExtreme clayey, Sandy soil, Saline soil and Calcareous soil is not suitable for Banana cultivation.\r\n\r\nAvoided soil of low lying areas, very sandy & heavy black cotton with ill drainage.\r\n\r\nA soil that is not too acidic & not too alkaline, rich in organic material with high nitrogen content, adequate phosphorus level and plenty of potash are good for banana.\r\n', 'Prior to planting banana, green manuring crop like daincha, cowpea etc. may be grown. The land can be ploughed 2-4 times and leveled. Ratovator or harrow is used to break the clod and bring the soil to a fine tilt. During soil preparation basal dose of FYM (about 50 tonnes/ha. before last harrowing) is added and thoroughly mixed into the soil.\r\n', 'Planting of tissue culture banana can be done throughout the year as per the market demand except when the temperature is too low or too high. The planting time may be adjusted so as to avoid high temperature and drought at the time of emergence of bunches (i.e. approx. 7-8 months after planting). The planting time for long duration cultivars is different from short duration ones.\r\n\r\n Maharashtra\r\n\r\n·         Kharif  - June – July\r\n\r\n·         Rabi - October – November\r\n\r\nTamil Nadu\r\n\r\n·         February – April\r\n\r\n·         November - December\r\n\r\nKerala\r\n\r\n·         Rainfed- April-May\r\n\r\n·         Irrigated crop- August-september\r\n\r\n', 'Farmyard manure\r\n\r\nFarm yard Manure is prepared basically using cow dung cow urine, waste straw and other dairy wastes.\r\n\r\nFYM is rich in nutrients.\r\n\r\nA larger portion of nitrogen is made available as and when the FYM decomposes. balanced nutrition is made available to the plants.\r\n\r\nAvailability of Potassium and Phosphorus from FYM is similar to that from inorganic sources. Application of FYM improves soil fertility.\r\n\r\nBio fertilizers\r\n\r\nBiofertilizers are ready to use live formulates of such beneficial microorganisms which on application to seed,root or soil mobilize the availability of nutrients by their biological activity in particular, and help build up the micro-flora and improves soil health.\r\n\r\nIt increases the crop yield by 20-30%.\r\n\r\nReplace chemical nitrogen and phosphorus by 25%.\r\n\r\nStimulate plant growth.\r\n\r\nActivate the soil biologically.\r\n\r\nRestore natural soil fertility.\r\n\r\nProvide protection against drought and some soil borne diseases.\r\n', 'Broadleaf and buckhorn plantain (Plantago major and P. lanceolata) are two major perennial weeds in California. These weeds can be found in turfgrass, ornamental plantings, gardens, roadsides, and pastures. Both species are found throughout the state and grow year-round, except in the coldest intermountain areas and deserts.\r\n\r\nThe genus Plantago consists of about 250 species worldwide, with 20 species found in California. Both broadleaf and buckhorn plantain were introduced from Europe. Broadleaf plantain is also known as common plantain and dooryard plantain. Other names for buckhorn plantain include narrow-leaf plantain, ribwort plantain, English plantain, and ribgrass.\r\n\r\nIDENTIFICATION AND LIFE CYCLE\r\nBroadleaf plantain commonly occurs in moist areas with full sun or partial shade and compacted soil. It has a tough short crown with fibrous roots attached. The smooth, oval leaf blades are 2 to 7 inches long with several veins that parallel the leaf margins. The leaf veins meet at t', 'Plantain (Musa Specie) is a tropical crop widely grown in Nigeria. It is usually grow in the rain forest region of Nigeria because it is a water hungry crop.\r\n\r\nPlantain is affected by a lot of diseases and crops. Some of the diseases and pests of plantain are Anthracnose, Black Sigatoka disease, Rhizome Rot, Fusarium Wilt, Beetles, Aphids, Moko disease, banana weevil and Coconut Scale etc.\r\n\r\nPlantain Farming in Nigeria\r\nDiseases and Pests of Plantain\r\nThe following are the pests and diseases of plantain:\r\n\r\nAnthracnose\r\nThis disease is caused by a fungus called Colletotrichum Musae. This disease presents as large brown spots on leaves, stems and fruits of the plantain crop.\r\n\r\nGood fungicides like Cabrio Duo, Redforce fungicide and Five Star fungicide can be used to manage this disease.\r\n\r\nBlack Sigatoka\r\nThis is also a fungal disease that is common in plantain crop. It is caused by a fungus called Mycosphaerella Fijiensis. This disease presents as red or brown spots on the underside', 'Turfgrass\r\nWell maintained turfgrass areas will assure a dense, healthy stand. Use best management practices such as thatch reduction, appropriate irrigation, and proper mowing height for the desired turf species.\r\n\r\nNo single procedure has been successful in controlling plantain in turfgrass. Early removal of new seedlings is successful when practiced diligently. Digging out perennial plantain plants must be done regularly for several years to be successful. Once these weeds are eradicated, areas should be renovated and managed to establish a healthy turfgrass sward.\r\n\r\nPreemergence herbicides that limit germination of plantain in turfgrass are those with the active ingredients atrazine, indaziflam, isoxaben, and mesotrione. Repeated applications of postemergence broadleaf herbicides can control plantain seedlings. However, control of mature plants with herbicides is difficult; products with 2,4-D work best.\r\n\r\nAdditional postemergence herbicide options include bromoxynil, carfentrazo', '2023-10-18 15:33:45'),
(44, 'Rubber', 'common crop in hilly akhyacsfh', 'rubber.jpg', 'ruber2.jpg', 'rubber2.jpg', '', 'norml', 'iuugfereg', 'gsr', 'sdsgr', 'a', '', '', '', '2023-10-18 15:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nid` int(11) NOT NULL,
  `nname` varchar(50) NOT NULL,
  `ndesc` varchar(250) NOT NULL,
  `ndatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `uid` int(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `prate` int(100) NOT NULL,
  `pquantity` int(100) NOT NULL,
  `qty_type` varchar(50) NOT NULL,
  `pcontact` bigint(10) NOT NULL,
  `pplace` varchar(150) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pimage1` varchar(100) NOT NULL,
  `pimage2` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'PENDING',
  `ptime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `uid`, `pname`, `prate`, `pquantity`, `qty_type`, `pcontact`, `pplace`, `pdesc`, `pimage1`, `pimage2`, `status`, `ptime`) VALUES
(27, 51, 'Tomato', 180, 2, 'KG', 9495679168, 'Palakkad', 'Fresh and good quality tomatoes.\r\nLimited stock only!', 'tomato1.jpg', '', 'APPROVED', '2023-10-18 15:34:35'),
(28, 53, 'Banana', 250, 3, 'Select option', 7736948308, 'Kozhikode', 'Fresh and good quality plantain.', 'plantain1.jpg', 'plantain2.jpg', 'APPROVED', '2023-10-18 15:34:35'),
(29, 54, 'Pumpkin', 100, 1, 'Select option', 7994118417, 'Alappuzha', 'Juicy pumpkin', 'pumpkinimage.jpeg', 'pumpkinimage2.jpg', 'APPROVED', '2023-10-18 15:34:35'),
(30, 55, 'Amaranthus', 200, 2, 'Select option', 7736890653, 'Kochal', 'Fresh amarantus', 'amaranthus.jpg', 'amaranthusimage.jpg', 'APPROVED', '2023-10-18 15:34:35'),
(32, 51, 'Test Product', 0, 0, 'Nos.', 9495679168, 'unknown', 'no details of test product', 'signup-image.jpg', 'signin-image.jpg', 'APPROVED', '2023-10-18 15:34:35'),
(34, 51, 'Pappaya', 12, 15, 'KG', 7736948308, 'POONJAR', 'papappapayayaya', 'pexels-george-desipris-821944.jpg', 'ajce.jpg', 'APPROVED', '2023-10-18 15:34:35'),
(35, 51, 'test', 15, 50, 'KG', 9495679168, 'POONJAR', 'test', 'product-success-bg.jpg', 'success-bg-img.jpg', 'REJECTED', '2023-10-18 15:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `place` varchar(150) NOT NULL,
  `district` varchar(150) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `name`, `profilepic`, `dob`, `gender`, `email`, `phone`, `password`, `place`, `district`, `regtime`) VALUES
(51, 'Navaneeth Vijayan', 'WhatsApp Image 2023-06-20 at 20.24.29.jpg', '2001-11-30', 'Male', 'navaneethvijayan2024@it.ajce,in', '9495679168', 'Navaneeth@39', 'POONJAR', 'Kottayam', '2023-10-18 15:35:02'),
(53, 'Archana P M', 'archana.jpg', '2002-05-01', 'Female', 'archanapm2024@it.ajce.in', '7736948308', 'Archana@12', 'Changanashery', 'Kottayam', '2023-10-18 15:35:02'),
(54, 'Navin Sebastian', 'navin.png', '2002-01-15', 'Male', 'navinsebastian2024@it.ajce.in', '7994118417', 'Navin@40', 'Paravur', 'Ernakulam', '2023-10-18 15:35:02'),
(55, 'Jithin saji', 'jithinimage.jpg', '2002-08-31', 'Male', 'jithinsaji2024@it.ajce.in', '7736890653', 'Jithin@31', 'kanjirapally', 'Kottayam', '2023-10-18 15:35:02'),
(58, 'Navaneetha Prasad', 'navaneetha.jpg', '2002-09-25', 'Female', 'navaneethaprasad123@gmail.com', '7907960439', 'Navaneeth@38', 'Nechipuzhoor', 'Kottayam', '2023-10-18 15:35:02'),
(61, 'test', 'success-bg-img.jpg', '2023-08-23', 'Other', 'test', '5566', 'test', 'test', 'Kottayam', '2023-10-18 15:36:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cropdata`
--
ALTER TABLE `cropdata`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `userprod` (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cropdata`
--
ALTER TABLE `cropdata`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `userprod` FOREIGN KEY (`uid`) REFERENCES `registration` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
