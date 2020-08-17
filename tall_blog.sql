-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 06:19 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tall_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Film', '2020-08-07 16:11:03', '2020-08-07 16:11:03'),
(3, 'Muzika', '2020-08-07 16:19:51', '2020-08-08 06:36:59'),
(4, 'Igre', '2020-08-08 12:46:11', '2020-08-08 12:46:11'),
(5, 'Knjige', '2020-08-08 12:46:30', '2020-08-09 14:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `category_genre`
--

CREATE TABLE `category_genre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_genre`
--

INSERT INTO `category_genre` (`id`, `category_id`, `genre_id`) VALUES
(1, 5, 1),
(2, 5, 3),
(3, 5, 2),
(4, 5, 4),
(5, 1, 1),
(6, 1, 2),
(7, 1, 3),
(9, 4, 1),
(10, 3, 5),
(11, 3, 8),
(12, 3, 7),
(13, 3, 6),
(14, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `mark`, `title`, `name`, `email`, `text`, `approve`, `created_at`, `updated_at`, `post_id`) VALUES
(1, '3', 'test', 'Miloš Marković', 'milos@gmail.com', 'ovo je test', 1, '2020-08-16 11:36:37', '2020-08-16 12:32:18', 11);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Akcija', '2020-08-08 09:09:06', '2020-08-08 09:09:06'),
(2, 'Komedija', '2020-08-08 09:10:37', '2020-08-08 09:10:37'),
(3, 'Drama', '2020-08-08 09:11:25', '2020-08-08 09:23:31'),
(4, 'Knjige za decu', '2020-08-08 13:02:25', '2020-08-08 13:02:25'),
(5, 'Rock', NULL, NULL),
(6, 'Opera', NULL, NULL),
(7, 'Clasica', NULL, NULL),
(8, 'jazz', NULL, NULL),
(9, 'Blues', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_07_173133_create_categories_table', 2),
(11, '2020_08_08_083845_create_posts_table', 3),
(12, '2020_08_08_102845_create_genres_table', 4),
(13, '2020_08_11_085207_create_category_genre_table', 5),
(16, '2020_08_12_102159_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `genre` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `autor`, `img`, `description`, `genre`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Pulp fiction', 'Qventin Tarantino', 'pulp_fiction.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna ex, tristique a sagittis a, vulputate in nisi. Vivamus purus est, commodo et tincidunt vitae, consequat vel arcu. Ut et elementum ipsum. Quisque ut tempor turpis. Curabitur magna mi, efficitur sit amet malesuada sed, suscipit sit amet dui. Cras consequat porta risus, a cursus nibh malesuada quis. Sed at odio auctor, dapibus nibh eget, dapibus dolor. Pellentesque tincidunt nec mauris vel maximus. Ut dui risus, ornare sit amet massa maximus, faucibus dignissim justo. Maecenas dolor nulla, tincidunt in nulla sollicitudin, lacinia malesuada purus. Aenean sit amet pretium purus. Cras quis mauris sed nulla suscipit elementum eu at massa. Pellentesque tempus vehicula suscipit. Maecenas mauris metus, euismod non blandit quis, feugiat at risus. In imperdiet eros eu purus scelerisque, id sollicitudin ligula consequat. Curabitur dolor dui, rhoncus id iaculis eget, sodales sit amet ipsum.</p>', 'Akcija', '2020-08-08 09:31:35', '2020-08-10 11:16:48', 1),
(2, 'Ubiti Bila', 'Kventin Tarantino', 'kill_bill.jpg', '<p>Ut odio quam, efficitur vel pulvinar nec, consequat sit amet diam. In sodales erat eget dui condimentum, id hendrerit justo convallis. Integer eget mauris vel nunc laoreet sollicitudin et vitae odio. Integer porta scelerisque nibh, sit amet efficitur felis tempor quis. Nulla eu viverra libero. Mauris ut ipsum tortor. Aliquam placerat ac nulla ut ultricies.</p>\r\n<p>Nam finibus varius magna bibendum congue. Quisque aliquet ex a dignissim bibendum. Maecenas mattis quis metus in fermentum. Vestibulum sodales augue neque, eget feugiat enim dapibus non. Morbi faucibus commodo enim maximus aliquet. Vestibulum tincidunt blandit iaculis. In commodo interdum tortor. Proin pulvinar in ligula vitae lacinia. Suspendisse aliquam ligula urna, vel lacinia velit pretium ac. Nunc nec erat purus.</p>', 'Komedija', '2020-08-08 11:59:24', '2020-08-10 11:16:59', 1),
(3, 'Mali Princ', 'Antoan de Sent Egziperi', 'mali_princ_vv-2.jpg', '<p>Jednog jutra pilota koji se na&scaron;ao usred pustinje Sahare zbog kvara na motoru probudio je piskav glasić rečima: &bdquo;Molim vas... nacrtaj mi ovcu!&ldquo; I tako je upoznao Malog Princa, radoznalog dečaka sa druge planete gde postoje samo tri vulkana i jedna ruža. Tokom svog putovanja, pre nego &scaron;to je sleteo na Zemlju, Mali Princ je posetio mnoge planete i upoznao čudne likove. Pilota je odu&scaron;evio ovaj čovečuljak koji mu je pričao o svojim avanturama i od koga je naučio kako da srcem posmatra svet jer: &bdquo;Bitno je očima nevidljivo&ldquo;.</p>', 'Knjige za decu', '2020-08-08 13:04:05', '2020-08-08 13:04:05', 5),
(4, 'Agi i Ema', 'Igor Kolarov', 'agi_i_ema-igor_kolarov_v.jpg', '<p>Kratki roman <em>Agi i Ema</em> donosi dirljivu priču o prijateljstvu usamljenog devetogodi&scaron;njeg dečaka Agija i luckaste starice Eme, i njihovom zajedničkom buntu protiv svirepog i otuđenog sveta.<br /><br />Po ovom poetskom i duhovitom romanu (ovenčanom Nagradom <em>Politikinog Zabavnika</em> za najbolju dečju knjigu) snimljen je prvi srpski film za decu posle dvadeset pet godina pauze, u režiji Milutina Petrovića. Roman je do sada preveden na engleski, ruski, francuski i italijanski jezik, a u Rusiji je za kratko vreme doživeo dva izdanja.</p>', 'Knjige za decu', '2020-08-08 13:05:41', '2020-08-08 13:05:41', 5),
(5, 'Mačak i skakutavo jaje', 'Andrija Milošević', 'macak_i_skakutavo_jaje-andrija_milosevic_v.jpg', '<p>Da li ste čuli za jaje koje je skakutalo kojekuda, pa skočilo čak do svemira? Znate li &scaron;ta je uradio dobri vampir Boža? Jeste li čuli za bezobraznu bubamaru? Ili za čudesnu devojčicu Đeđu?<br /><br />Uživajte u zabavnim pesmicama Andrije Milo&scaron;evića i u divnim ilustracijama Nemanje Ristića, a kroz smeh ćete shvatiti svu vrednost i lepotu dečje ma&scaron;te.</p>', 'Knjige za decu', '2020-08-08 13:08:05', '2020-08-08 13:08:05', 5),
(6, 'Poštovana deco: izabrane pesme', 'Dušan Radović', 'postovana_deco_izabrane_pesme-dusan_radovic_v.jpg', '<p>Bio jednom jedan lav...<br />Kakav lav?<br />Stra&scaron;an lav,<br />narogu&scaron;en i ljut sav!<br />Stra&scaron;no, stra&scaron;no!<br /><br />Zbirka pesama Po&scaron;tovana deco objavljena je 1954. godine i u ovoj knjizi nalazi se u svom originalnom obliku. Stra&scaron;nom lavu i Plavom zecu dru&scaron;tvo prave i pesme Zamislite, Najbolja mama na svetu, Pouka i mnogi drugi dragulji jednog od najvećih srpskih pesnika za decu.<br /><br />Otkrivajući lepote sveta i jezika, va&scaron;i mali&scaron;ani će uz stihove Du&scaron;ana Radovića spoznati da je poezija su&scaron;tinski važan deo na&scaron;eg života.</p>', 'Knjige za decu', '2020-08-08 13:10:14', '2020-08-08 13:10:14', 5),
(7, 'Ubiti bila 2', 'Kventin Tarantino', 'kill_bill_2.jpg', '<p>Nam non ligula nec diam consequat placerat. Praesent tristique ex id viverra pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper commodo euismod. Fusce rutrum dapibus pharetra. In tincidunt sapien sit amet velit hendrerit, tempor pretium turpis vulputate. Pellentesque nec sollicitudin quam, non pulvinar purus. Ut id aliquet nibh. Aliquam ante ex, scelerisque quis odio a, scelerisque facilisis felis. In venenatis elit in nulla lobortis, ac venenatis magna malesuada. Nam eget dui leo. Phasellus mi est, porttitor in pretium at, vestibulum sit amet mi. Cras tempus ex eu egestas dignissim.</p>\r\n<p>Ut odio quam, efficitur vel pulvinar nec, consequat sit amet diam. In sodales erat eget dui condimentum, id hendrerit justo convallis. Integer eget mauris vel nunc laoreet sollicitudin et vitae odio. Integer porta scelerisque nibh, sit amet efficitur felis tempor quis. Nulla eu viverra libero. Mauris ut ipsum tortor. Aliquam placerat ac nulla ut ultricies.</p>', 'Akcija', '2020-08-08 13:12:03', '2020-08-10 11:17:11', 1),
(8, 'Besnilo', 'Branislav Pekić', 'pekic-besnilo.jpg', '<p>Virus u obliku metka pogađa u srce civilizacije... Niko nije bezbedan.<br /><br />Vizija kraja sveta koja odgovara onome &scaron;to smo od sveta napravili.<br /><br />Biolo&scaron;ka katastrofa, u razmerama nepoznatim savremenoj istoriji, pogađa londonski aerodrom Hitrou u jeku letnje sezone. Usled mutacije virusa besnila u jednoj naučnoj laboratoriji, epidemija se &scaron;iri zastra&scaron;ujućom brzinom jer nijedna vakcina ne deluje. U karantinu, koji obuhvata ogroman kompleks, zateklo se na desetine hiljada putnika i name&scaron;tenika aerodroma... <br /><br />U ovoj univerzalnoj metafori, čije književne srodnike možemo prepoznati u Kamijevoj <em>Kugi</em> ili Saramagovom <em>Slepilu</em>, zaraženi ljudi vode rat ne samo sa zlokobnim psećim virusom, nego i sa besnilom u sebi i besnilom svoje okoline, razotkrivajući tako zastra&scaron;ujuću istinu o ljudskoj prirodi: nije nam potreban virus da bi ludilo koje s rođenjem nosimo iskazalo sve svoje vidove i probilo tanku opnu obzira i samopo&scaron;tovanja.<br /><br />Apokaliptična vizija sveta koja se bavi ljudskom vrstom i prirodom na&scaron;e civilizacije.<br /><br /><strong>Prvi put ekskluzivna kolekcija celokupnog književnog opusa Borislava Pekića.</strong></p>', 'Drama', '2020-08-10 09:44:21', '2020-08-10 09:44:21', 5),
(9, 'Malavita', 'Tonino Benakvista', 'benakavista-malavita.jpg', '<p>Roman koji je inspirisao Martina Skorsezea, Lika Besona i Roberta de Nira da snime najzabavniji film o Mafiji do sada! <br /><br />Možda čovek može napustiti Mafiju, ali Mafija nikada neće napustiti njega.<br /><br />Američka porodica se nastanjuje u &Scaron;olonu na Avru, u Normandiji. Sve je naizgled uobičajeno. Fred, otac, tvrdi da je istoričar koji priprema knjigu o iskrcavanju. Megi, majka, volontira u jednom dobrotvornom udruženju i briljantno sprema ro&scaron;tilj. Bel, ćerka, časno nosi svoje ime. I najzad, bez Vorena, sina, ni&scaron;ta ne može da se obavi i svima je potrebna njegova pomoć. A ne smemo zaboraviti ni veoma diskretnog psa po imenu Malavita. Sve u svemu, porodica poput drugih. Osim &scaron;to porodica Blejk ni u kom slučaju nije onakva kakvom želi da se prikaže jer otac nije pisac već biv&scaron;i &scaron;ef njujor&scaron;kog mafija&scaron;kog klana koga prate agenti FBI-ja. <br /><br />Život Blejkovih, pod stalnom pretnjom odmazde, pretvoren je u niz bežanja, laži i besmislenih situacija. Sada će Fred, Megi, Bel i Voren poku&scaron;ati, svako na svoj način, da pronađu smisao svog postojanja u ovom nezanimljivom malom gradu. Sve do dana kada im Don Mimino, vođa pet porodica u Njujorku, neočekivano ulazi u trag... Jedno je sigurno: ako se Blejkovi dosele u va&scaron; kraj, bežite glavom bez obzira.<br /><br />&bdquo;Divlje zabavno i iznenađujuće dirljivo.&ldquo; - <em>The Guardian</em><br /><br />&bdquo;Urnebesno! Britko pisanje, žustar tempo, ludi humor &ndash; kriminalistička priča koja će odu&scaron;eviti sve ljubitelje romana Elnora Leonarda.&ldquo; - <em>Publishers Weekly</em><br /><br />&bdquo;Izuzetno pametno i originalno osmi&scaron;ljeno! Virtuozne scene zasnovane na apsurdima i slučajnostima potpuno će vas odu&scaron;eviti.&ldquo; - <em>Kirkus Reviews</em></p>', 'Drama', '2020-08-10 09:46:40', '2020-08-10 09:46:40', 5),
(10, 'Fajront u Sarajevu - dopunjeno izdanje', 'Dr Nele Karajlić', 'fajront_u_sarajevu.jpg', '<div style=\"text-align: justify;\">Posebno, dopunjeno izdanje jedinstvene ispovesti, sa autorovim pogovorom.<br /><br />Kako je i za&scaron;to nastala ova knjiga i za&scaron;to je u njoj &scaron;to&scaron;ta izostalo.<br /><br />Neočekivana reakcija jedne uznemirene čitateljke koju smo morali da objavimo u dodatku knjige.<em><br /></em></div>\r\n<p><em><br />Fajront u Sarajevu</em> je te&scaron;ko, pomalo bolno, svakako setno prebiranje po uspomenama jednog od Sarajlija koje su taj grad u Titovoj Jugoslaviji učinile posebnim. Novi primitivizam je Sarajevo izbacio iz zglobne ča&scaron;ice, učinio ga drugačijim, dao mu oreol avangarde, a najveća zvezda tog pokreta bio je dr Nele Karajlić.<br /><br />Ovo je njegova priča, iskrena, duhovita, priča bez koje predratno Sarajevo &ndash; grad raje i papaka &ndash; nije moguće razumeti do kraja. U tom kazivanju Nele je sanjar o sunčanoj strani ulice, naivac, žrtva, vizija koja hoda, nepresu&scaron;ni izvor ideja, hrpa straha. Takav njegov život mogao je da se kreće, i kretao se, samo od linije &scaron;esnaesterca fudbalskog kluba Vratnik, davnih sedamdesetih, do Prvog koronarnog odeljenja Urgentnog centra u Beogradu, četrdesetak godina kasnije. Sve &scaron;to se važno odigralo između te dve stvarne i vremenske linije, naći ćete u ovoj knjizi.</p>', 'Drama', '2020-08-10 11:05:48', '2020-08-10 11:05:48', 5),
(11, 'Zašto spavamo', 'Metju Voker', 'zasto_spavamo-metju_voker_v.jpg', '<p>Razotkrivanje moći spavanja i sanjanja.<br /><br />Bestseler <em>New York Timesa</em> i međunarodna senzacija.<br /><br />&bdquo;Knjiga koju treba držati pored kreveta, iz najpraktičnijih razloga&ldquo; <em>New York Times</em><br /><br />Zadivljujuće istraživanje svrhe i moći spavanja iz pera direktora Centra za proučavanje spavanja na Univerzitetu Berkli. Autor razja&scaron;njava za&scaron;to je spavanje jedan od najvažnijih vidova na&scaron;eg života, ujedno i onaj koji najmanje razumemo.<br /><br />Sve donedavno nauka nije imala odgovor na pitanja za&scaron;to spavamo i čemu spavanje služi ili otkud takve pogubne posledice po zdravlje kad nam je san uskraćen. U poređenju s nagonima za hranom, pićem i razmnožavanjem &ndash; razumevanje svrhe spavanja je mnogo teže i zahtevnije.<br /><br />U samom mozgu spavanje obogaćuje razne funkcije, uključujući na&scaron;u sposobnost za učenje, pamćenje i dono&scaron;enje logičkih odluka. Ono pode&scaron;ava na&scaron;e emocije, obnavlja imunolo&scaron;ki sistem, fino usklađuje rad na&scaron;eg metabolizma i reguli&scaron;e apetit. Sanjarenje stvara prostor virtuelne realnosti u kojem mozak spaja pro&scaron;lo i sada&scaron;nje znanje, čime nadahnjuje na&scaron;u kreativnost.<br /><br />Voker obja&scaron;njava kako možemo da iskoristimo spavanje da bismo podigli raspoloženje, povećali nivo energije, regulisali hormone i sprečili pojavu raka, Alchajmerove bolesti i dijabetesa, ali i usporili starenje i produžili život. Ujedno daje praktične savete o tome kako bolje spavati noću, i to svake noći.<br /><br />&bdquo;Izuzetno značajna knjiga, pogotovo za one koji imaju problema sa spavanjem.&ldquo; <em>Library Journal</em><br /><br />&bdquo;Neuronaučnik je otrkio revolucionarni način da postanete pametniji, vitkiji, srećniji i zdraviji &ndash; dobar noćni san.&ldquo; <em>Guardian</em><br /><br />&bdquo;<em>Za&scaron;to spavamo</em> je knjiga sa misijom. Preporučuujemo je kao obavezno &scaron;tivo za čitanje.&ldquo; <em>New York Times Book Review</em></p>', 'Drama', '2020-08-10 11:07:19', '2020-08-10 11:07:19', 5),
(12, 'Reservoar Dogs', 'Kventin Tarantino', 'reservoir_dogs.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>\r\n<p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>', 'Akcija', '2020-08-10 11:20:44', '2020-08-10 11:20:44', 1),
(13, 'Hair', 'Miloš Forman', 'hair.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>\r\n<p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>', 'Drama', '2020-08-10 11:41:47', '2020-08-10 11:41:47', 1),
(14, 'Amadeus', 'Miloš Forman', 'amadeus.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>\r\n<p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>', 'Drama', '2020-08-10 11:43:17', '2020-08-12 06:07:21', 1),
(16, 'Jurastic Park', 'Steven Spilberg', 'jurastic_park.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae felis dapibus odio tempus finibus. Aliquam est risus, fermentum at tortor at, fermentum semper nisl. Suspendisse ac euismod nisi. Aliquam ut bibendum nisl, eu hendrerit mauris. Vestibulum at lacinia lacus. Vivamus vulputate iaculis posuere. Integer imperdiet augue vitae orci ultricies hendrerit et quis tellus. Aenean et orci blandit, tempus eros vel, rhoncus est. Aliquam efficitur commodo est, nec euismod velit viverra quis. Nulla viverra ultrices odio, quis faucibus risus consectetur euismod. Morbi ut maximus neque. Etiam congue felis a quam tristique, ac ornare sapien iaculis. Suspendisse porttitor diam felis, id vestibulum nunc lacinia eu. Vestibulum in placerat risus. Praesent sit amet purus velit. Fusce rutrum lobortis convallis.</p>\r\n<p>Pellentesque ultricies faucibus luctus. Integer ac erat turpis. Sed turpis turpis, placerat eleifend consequat eget, porta ac tortor. Etiam bibendum vel mauris at ullamcorper. Nunc malesuada leo id dui scelerisque, ut molestie ipsum dictum. Nulla et dapibus neque, non malesuada orci. Pellentesque et tristique diam.</p>\r\n<p><code></code></p>', 'Drama', '2020-08-10 11:53:28', '2020-08-12 05:56:33', 1),
(17, 'Indiana Jons', 'Steven Spilberg', 'indiana.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>\r\n<p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>', 'Drama', '2020-08-10 11:54:16', '2020-08-10 11:54:16', 1),
(18, 'Mortal Kombat', 'Test', 'mortal kombat.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 05:24:19', '2020-08-11 05:24:19', 4),
(19, 'Minecraft', 'Test', 'minecraft-1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 05:26:48', '2020-08-11 05:26:48', 4),
(20, 'Call Of Duty', 'Test', 'call-of-duty.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 05:27:29', '2020-08-11 05:27:29', 4),
(21, 'Fortinite', 'Test', 'Igra-Fortnite.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 05:29:18', '2020-08-11 05:29:18', 4),
(22, 'Taken', 'Test', 'taken.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 05:59:14', '2020-08-11 05:59:14', 4),
(23, 'Red Dead', 'Test', 'red_dead.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 06:00:15', '2020-08-11 06:00:15', 4),
(24, 'Worcraft', 'Test', 'worcraft.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 06:01:04', '2020-08-11 06:01:04', 4),
(25, 'Dota 2', 'Test', 'dota.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Akcija', '2020-08-11 06:03:18', '2020-08-11 06:03:18', 4),
(26, 'Eric Clapton - best of', 'Eric Clapton', 'eric clapton.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Rock', '2020-08-11 06:33:51', '2020-08-11 06:33:51', 3),
(27, 'Carlos Santana - best of', 'Carlos Santana', 'carlos santana.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie in augue non suscipit. Etiam purus tellus, convallis sit amet dolor vel, gravida gravida elit. Integer vitae lacus ut enim condimentum luctus nec vitae nisi. Sed efficitur magna id turpis feugiat, gravida commodo velit consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui eros, congue sed porttitor ac, faucibus eu diam. Suspendisse ac cursus justo. Cras rutrum et ligula a tempor. Pellentesque suscipit nisl ut malesuada semper. Suspendisse tempus sed leo in pulvinar. In interdum efficitur leo feugiat commodo. Fusce pretium quam tortor, quis euismod odio aliquet nec. Mauris eget semper tellus. Fusce in mollis nisl. Maecenas dictum euismod tellus et accumsan.</p>\r\n<p>Nulla vitae consequat mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis et pharetra velit. Donec sit amet sagittis est. Suspendisse potenti. Sed dolor massa, pellentesque a volutpat ut, blandit sed nibh. Mauris interdum mauris nec iaculis laoreet. Etiam imperdiet est id augue mollis aliquam. Praesent luctus fermentum ante, a dapibus magna varius gravida. Maecenas et tincidunt risus. Nam id nibh mollis, tincidunt dolor sed, sollicitudin nisl. Suspendisse potenti.</p>', 'Rock', '2020-08-11 06:34:49', '2020-08-11 06:34:49', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Milos Markovic', 'milos@gmail.com', NULL, '$2y$10$5teA956LigGubhxulhrmX.XE0Ceb8ohBS1T5Q2VXP2uE7a8JpTrQi', 'uImw9SrIHJIxwNvfVxEbF2QSlq9b5Uxrs3guS69ZVsa7rTPbFbQmWkva22Ax', '2020-08-07 09:20:19', '2020-08-07 09:20:19'),
(10, 'Djordje Markovic', 'djoka@gmail.com', NULL, '$2y$10$yNWwsfB2XbApkHAQDSDq2.TXjK5cx6vlWSIP7RyADnXDNKW6M5Ynm', NULL, '2020-08-07 15:21:20', '2020-08-16 13:24:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_genre`
--
ALTER TABLE `category_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_genre_category_id_foreign` (`category_id`),
  ADD KEY `category_genre_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_genre`
--
ALTER TABLE `category_genre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_genre`
--
ALTER TABLE `category_genre`
  ADD CONSTRAINT `category_genre_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_genre_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
