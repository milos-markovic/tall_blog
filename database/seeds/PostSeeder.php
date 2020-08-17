<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Category;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post1 = Category::find(1)->posts()->create([
            'title' => 'Pulp fiction',
            'autor' => 'Qventin Tarantino',
            'img' => 'pulp_fiction.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna ex, tristique a sagittis a, vulputate in nisi. Vivamus purus est, commodo et tincidunt vitae, consequat vel arcu. Ut et elementum ipsum. Quisque ut tempor turpis. Curabitur magna mi, efficitur sit amet malesuada sed, suscipit sit amet dui. Cras consequat porta risus, a cursus nibh malesuada quis. Sed at odio auctor, dapibus nibh eget, dapibus dolor. Pellentesque tincidunt nec mauris vel maximus. Ut dui risus, ornare sit amet massa maximus, faucibus dignissim justo. Maecenas dolor nulla, tincidunt in nulla sollicitudin, lacinia malesuada purus. Aenean sit amet pretium purus. Cras quis mauris sed nulla suscipit elementum eu at massa. Pellentesque tempus vehicula suscipit. Maecenas mauris metus, euismod non blandit quis, feugiat at risus. In imperdiet eros eu purus scelerisque, id sollicitudin ligula consequat. Curabitur dolor dui, rhoncus id iaculis eget, sodales sit amet ipsum.</p>',
            'genre' => 'Akcija',
        ]);

        $post2 = Category::find(1)->posts()->create([
            'title' => 'Ubiti Bila',
            'autor' => 'Qventin Tarantino',
            'img' => 'kill_bill.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna ex, tristique a sagittis a, vulputate in nisi. Vivamus purus est, commodo et tincidunt vitae, consequat vel arcu. Ut et elementum ipsum. Quisque ut tempor turpis. Curabitur magna mi, efficitur sit amet malesuada sed, suscipit sit amet dui. Cras consequat porta risus, a cursus nibh malesuada quis. Sed at odio auctor, dapibus nibh eget, dapibus dolor. Pellentesque tincidunt nec mauris vel maximus. Ut dui risus, ornare sit amet massa maximus, faucibus dignissim justo. Maecenas dolor nulla, tincidunt in nulla sollicitudin, lacinia malesuada purus. Aenean sit amet pretium purus. Cras quis mauris sed nulla suscipit elementum eu at massa. Pellentesque tempus vehicula suscipit. Maecenas mauris metus, euismod non blandit quis, feugiat at risus. In imperdiet eros eu purus scelerisque, id sollicitudin ligula consequat. Curabitur dolor dui, rhoncus id iaculis eget, sodales sit amet ipsum.</p>',
            'genre' => 'Akcija',
        ]);

        $post3 = Category::find(1)->posts()->create([
            'title' => 'Pulp fiction',
            'autor' => 'Qventin Tarantino',
            'img' => 'pulp_fiction.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna ex, tristique a sagittis a, vulputate in nisi. Vivamus purus est, commodo et tincidunt vitae, consequat vel arcu. Ut et elementum ipsum. Quisque ut tempor turpis. Curabitur magna mi, efficitur sit amet malesuada sed, suscipit sit amet dui. Cras consequat porta risus, a cursus nibh malesuada quis. Sed at odio auctor, dapibus nibh eget, dapibus dolor. Pellentesque tincidunt nec mauris vel maximus. Ut dui risus, ornare sit amet massa maximus, faucibus dignissim justo. Maecenas dolor nulla, tincidunt in nulla sollicitudin, lacinia malesuada purus. Aenean sit amet pretium purus. Cras quis mauris sed nulla suscipit elementum eu at massa. Pellentesque tempus vehicula suscipit. Maecenas mauris metus, euismod non blandit quis, feugiat at risus. In imperdiet eros eu purus scelerisque, id sollicitudin ligula consequat. Curabitur dolor dui, rhoncus id iaculis eget, sodales sit amet ipsum.</p>',
            'genre' => 'Komedija',
        ]);

        $post4 = Category::find(4)->posts()->create([
            'title' => 'Mali Princ',
            'autor' => 'Antoan de Sent Egziperi',
            'img' => 'mali_princ_vv-2.jpg',
            'description' => '<p>Jednog jutra pilota koji se na&scaron;ao usred pustinje Sahare zbog kvara na motoru probudio je piskav glasić rečima: &bdquo;Molim vas... nacrtaj mi ovcu!&ldquo; I tako je upoznao Malog Princa, radoznalog dečaka sa druge planete gde postoje samo tri vulkana i jedna ruža. Tokom svog putovanja, pre nego &scaron;to je sleteo na Zemlju, Mali Princ je posetio mnoge planete i upoznao čudne likove. Pilota je odu&scaron;evio ovaj čovečuljak koji mu je pričao o svojim avanturama i od koga je naučio kako da srcem posmatra svet jer: &bdquo;Bitno je očima nevidljivo&ldquo;.</p>',
            'genre' => 'Knjige za decu', 
        ]);

        $post5 = Category::find(4)->posts()->create([
            'title' => 'Agi i Ema',
            'autor' => 'Igor Kolarov',
            'img' => 'agi_i_ema-igor_kolarov_v.jpg',
            'description' => '<p>Kratki roman <em>Agi i Ema</em> donosi dirljivu priču o prijateljstvu usamljenog devetogodi&scaron;njeg dečaka Agija i luckaste starice Eme, i njihovom zajedničkom buntu protiv svirepog i otuđenog sveta.<br /><br />Po ovom poetskom i duhovitom romanu (ovenčanom Nagradom <em>Politikinog Zabavnika</em> za najbolju dečju knjigu) snimljen je prvi srpski film za decu posle dvadeset pet godina pauze, u režiji Milutina Petrovića. Roman je do sada preveden na engleski, ruski, francuski i italijanski jezik, a u Rusiji je za kratko vreme doživeo dva izdanja.</p',
            'genre' => 'Knjige za decu',
        ]);

        $post6 = Category::find(4)->posts()->create([
            'title' => 'Poštovana deco: izabrane pesme',
            'autor' => 'Dušan Radović',
            'img' => 'postovana_deco_izabrane_pesme-dusan_radovic_v.jpg',
            'description' => '<p>Bio jednom jedan lav...<br />Kakav lav?<br />Stra&scaron;an lav,<br />narogu&scaron;en i ljut sav!<br />Stra&scaron;no, stra&scaron;no!<br /><br />Zbirka pesama Po&scaron;tovana deco objavljena je 1954. godine i u ovoj knjizi nalazi se u svom originalnom obliku. Stra&scaron;nom lavu i Plavom zecu dru&scaron;tvo prave i pesme Zamislite, Najbolja mama na svetu, Pouka i mnogi drugi dragulji jednog od najvećih srpskih pesnika za decu.<br /><br />Otkrivajući lepote sveta i jezika, va&scaron;i mali&scaron;ani će uz stihove Du&scaron;ana Radovića spoznati da je poezija su&scaron;tinski važan deo na&scaron;eg života.</p>',
            'genre' => 'Knjige za decu',
        ]);

        $post7 = Category::find(1)->posts()->create([
            'title' => 'Ubiti bila 2',
            'autor' => 'Kventin Tarantino',
            'img' => 'kill_bill_2.jpg',
            'description' => '<p>Nam non ligula nec diam consequat placerat. Praesent tristique ex id viverra pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper commodo euismod. Fusce rutrum dapibus pharetra. In tincidunt sapien sit amet velit hendrerit, tempor pretium turpis vulputate. Pellentesque nec sollicitudin quam, non pulvinar purus. Ut id aliquet nibh. Aliquam ante ex, scelerisque quis odio a, scelerisque facilisis felis. In venenatis elit in nulla lobortis, ac venenatis magna malesuada. Nam eget dui leo. Phasellus mi est, porttitor in pretium at, vestibulum sit amet mi. Cras tempus ex eu egestas dignissim.</p>
            <p>Ut odio quam, efficitur vel pulvinar nec, consequat sit amet diam. In sodales erat eget dui condimentum, id hendrerit justo convallis. Integer eget mauris vel nunc laoreet sollicitudin et vitae odio. Integer porta scelerisque nibh, sit amet efficitur felis tempor quis. Nulla eu viverra libero. Mauris ut ipsum tortor. Aliquam placerat ac nulla ut ultricies.</p>',
            'genre' => 'Akcija',
        ]);

        $post8 = Category::find(4)->posts()->create([
            'title' => 'Besnilo',
            'autor' => 'Branislav Pekić',
            'img' => 'pekic-besnilo.jpg',
            'description' => '<p>Virus u obliku metka pogađa u srce civilizacije... Niko nije bezbedan.<br /><br />Vizija kraja sveta koja odgovara onome &scaron;to smo od sveta napravili.<br /><br />Biolo&scaron;ka katastrofa, u razmerama nepoznatim savremenoj istoriji, pogađa londonski aerodrom Hitrou u jeku letnje sezone. Usled mutacije virusa besnila u jednoj naučnoj laboratoriji, epidemija se &scaron;iri zastra&scaron;ujućom brzinom jer nijedna vakcina ne deluje. U karantinu, koji obuhvata ogroman kompleks, zateklo se na desetine hiljada putnika i name&scaron;tenika aerodroma... <br /><br />U ovoj univerzalnoj metafori, čije književne srodnike možemo prepoznati u Kamijevoj <em>Kugi</em> ili Saramagovom <em>Slepilu</em>, zaraženi ljudi vode rat ne samo sa zlokobnim psećim virusom, nego i sa besnilom u sebi i besnilom svoje okoline, razotkrivajući tako zastra&scaron;ujuću istinu o ljudskoj prirodi: nije nam potreban virus da bi ludilo koje s rođenjem nosimo iskazalo sve svoje vidove i probilo tanku opnu obzira i samopo&scaron;tovanja.<br /><br />Apokaliptična vizija sveta koja se bavi ljudskom vrstom i prirodom na&scaron;e civilizacije.<br /><br /><strong>Prvi put ekskluzivna kolekcija celokupnog književnog opusa Borislava Pekića.</strong></p>',
            'genre' => 'Drama',
        ]);

        $post9 = Category::find(4)->posts()->create([
            'title' => 'Malavita',
            'autor' => 'Tonino Benakvista',
            'img' => 'benakavista-malavita.jpg',
            'description' => '<p>Roman koji je inspirisao Martina Skorsezea, Lika Besona i Roberta de Nira da snime najzabavniji film o Mafiji do sada! <br /><br />Možda čovek može napustiti Mafiju, ali Mafija nikada neće napustiti njega.<br /><br />Američka porodica se nastanjuje u &Scaron;olonu na Avru, u Normandiji. Sve je naizgled uobičajeno. Fred, otac, tvrdi da je istoričar koji priprema knjigu o iskrcavanju. Megi, majka, volontira u jednom dobrotvornom udruženju i briljantno sprema ro&scaron;tilj. Bel, ćerka, časno nosi svoje ime. I najzad, bez Vorena, sina, ni&scaron;ta ne može da se obavi i svima je potrebna njegova pomoć. A ne smemo zaboraviti ni veoma diskretnog psa po imenu Malavita. Sve u svemu, porodica poput drugih. Osim &scaron;to porodica Blejk ni u kom slučaju nije onakva kakvom želi da se prikaže jer otac nije pisac već biv&scaron;i &scaron;ef njujor&scaron;kog mafija&scaron;kog klana koga prate agenti FBI-ja. <br /><br />Život Blejkovih, pod stalnom pretnjom odmazde, pretvoren je u niz bežanja, laži i besmislenih situacija. Sada će Fred, Megi, Bel i Voren poku&scaron;ati, svako na svoj način, da pronađu smisao svog postojanja u ovom nezanimljivom malom gradu. Sve do dana kada im Don Mimino, vođa pet porodica u Njujorku, neočekivano ulazi u trag... Jedno je sigurno: ako se Blejkovi dosele u va&scaron; kraj, bežite glavom bez obzira.<br /><br />&bdquo;Divlje zabavno i iznenađujuće dirljivo.&ldquo; - <em>The Guardian</em><br /><br />&bdquo;Urnebesno! Britko pisanje, žustar tempo, ludi humor &ndash; kriminalistička priča koja će odu&scaron;eviti sve ljubitelje romana Elnora Leonarda.&ldquo; - <em>Publishers Weekly</em><br /><br />&bdquo;Izuzetno pametno i originalno osmi&scaron;ljeno! Virtuozne scene zasnovane na apsurdima i slučajnostima potpuno će vas odu&scaron;eviti.&ldquo; - <em>Kirkus Reviews</em></p>',
            'genre' => 'Drama',
        ]);

        $post10 = Category::find(4)->posts()->create([
            'title' => 'Fajront u Sarajevu - dopunjeno izdanje',
            'autor' => 'Dr Nele Karajlić',
            'img' => 'fajront_u_sarajevu.jpg',
            'description' => '<div style="text-align: justify;">Posebno, dopunjeno izdanje jedinstvene ispovesti, sa autorovim pogovorom.<br /><br />Kako je i za&scaron;to nastala ova knjiga i za&scaron;to je u njoj &scaron;to&scaron;ta izostalo.<br /><br />Neočekivana reakcija jedne uznemirene čitateljke koju smo morali da objavimo u dodatku knjige.<em><br /></em></div>
            <p><em><br />Fajront u Sarajevu</em> je te&scaron;ko, pomalo bolno, svakako setno prebiranje po uspomenama jednog od Sarajlija koje su taj grad u Titovoj Jugoslaviji učinile posebnim. Novi primitivizam je Sarajevo izbacio iz zglobne ča&scaron;ice, učinio ga drugačijim, dao mu oreol avangarde, a najveća zvezda tog pokreta bio je dr Nele Karajlić.<br /><br />Ovo je njegova priča, iskrena, duhovita, priča bez koje predratno Sarajevo &ndash; grad raje i papaka &ndash; nije moguće razumeti do kraja. U tom kazivanju Nele je sanjar o sunčanoj strani ulice, naivac, žrtva, vizija koja hoda, nepresu&scaron;ni izvor ideja, hrpa straha. Takav njegov život mogao je da se kreće, i kretao se, samo od linije &scaron;esnaesterca fudbalskog kluba Vratnik, davnih sedamdesetih, do Prvog koronarnog odeljenja Urgentnog centra u Beogradu, četrdesetak godina kasnije. Sve &scaron;to se važno odigralo između te dve stvarne i vremenske linije, naći ćete u ovoj knjizi.</p>',
            'genre' => 'Drama',
        ]);

        $post11 = Category::find(4)->posts()->create([
            'title' => 'Zašto spavamo',
            'autor' => 'Metju Voker',
            'img' => 'zasto_spavamo-metju_voker_v.jpg',
            'description' => '<p>Razotkrivanje moći spavanja i sanjanja.<br /><br />Bestseler <em>New York Timesa</em> i međunarodna senzacija.<br /><br />&bdquo;Knjiga koju treba držati pored kreveta, iz najpraktičnijih razloga&ldquo; <em>New York Times</em><br /><br />Zadivljujuće istraživanje svrhe i moći spavanja iz pera direktora Centra za proučavanje spavanja na Univerzitetu Berkli. Autor razja&scaron;njava za&scaron;to je spavanje jedan od najvažnijih vidova na&scaron;eg života, ujedno i onaj koji najmanje razumemo.<br /><br />Sve donedavno nauka nije imala odgovor na pitanja za&scaron;to spavamo i čemu spavanje služi ili otkud takve pogubne posledice po zdravlje kad nam je san uskraćen. U poređenju s nagonima za hranom, pićem i razmnožavanjem &ndash; razumevanje svrhe spavanja je mnogo teže i zahtevnije.<br /><br />U samom mozgu spavanje obogaćuje razne funkcije, uključujući na&scaron;u sposobnost za učenje, pamćenje i dono&scaron;enje logičkih odluka. Ono pode&scaron;ava na&scaron;e emocije, obnavlja imunolo&scaron;ki sistem, fino usklađuje rad na&scaron;eg metabolizma i reguli&scaron;e apetit. Sanjarenje stvara prostor virtuelne realnosti u kojem mozak spaja pro&scaron;lo i sada&scaron;nje znanje, čime nadahnjuje na&scaron;u kreativnost.<br /><br />Voker obja&scaron;njava kako možemo da iskoristimo spavanje da bismo podigli raspoloženje, povećali nivo energije, regulisali hormone i sprečili pojavu raka, Alchajmerove bolesti i dijabetesa, ali i usporili starenje i produžili život. Ujedno daje praktične savete o tome kako bolje spavati noću, i to svake noći.<br /><br />&bdquo;Izuzetno značajna knjiga, pogotovo za one koji imaju problema sa spavanjem.&ldquo; <em>Library Journal</em><br /><br />&bdquo;Neuronaučnik je otrkio revolucionarni način da postanete pametniji, vitkiji, srećniji i zdraviji &ndash; dobar noćni san.&ldquo; <em>Guardian</em><br /><br />&bdquo;<em>Za&scaron;to spavamo</em> je knjiga sa misijom. Preporučuujemo je kao obavezno &scaron;tivo za čitanje.&ldquo; <em>New York Times Book Review</em></p>',
            'genre' => 'Drama',
        ]);
   
        $post12 = Category::find(1)->posts()->create([
            'title' => 'Reservoar Dogs',
            'autor' => 'Kventin Tarantino',
            'img' => 'reservoir_dogs.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
       
        $post13 = Category::find(1)->posts()->create([
            'title' => 'Hair',
            'autor' => 'Miloš Forman',
            'img' => 'hair.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Drama',
        ]);
        
        $post14 = Category::find(1)->posts()->create([
            'title' => 'Amadeus',
            'autor' => 'Miloš Forman',
            'img' => 'amadeus.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Drama',
        ]);
        
        $post15 = Category::find(1)->posts()->create([
            'title' => 'Jurastic Park',
            'autor' => 'Steven Spilberg',
            'img' => 'jurastic_park.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Drama',
        ]);
 
        $post16 = Category::find(1)->posts()->create([
            'title' => 'Indiana Jons',
            'autor' => 'Steven Spilberg',
            'img' => 'indiana.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Drama',
        ]);
        
        $post17 = Category::find(3)->posts()->create([
            'title' => 'Mortal Kombat',
            'autor' => 'Test',
            'img' => 'mortal kombat.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
      
        $post18 = Category::find(3)->posts()->create([
            'title' => 'Minecraft',
            'autor' => 'Test',
            'img' => 'minecraft-1.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
        
        $post19 = Category::find(3)->posts()->create([
            'title' => 'Call Of Duty',
            'autor' => 'Test',
            'img' => 'call-of-duty.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
  
        $post20 = Category::find(3)->posts()->create([
            'title' => 'Fortinite',
            'autor' => 'Test',
            'img' => 'Igra-Fortnite.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
        
        $post21 = Category::find(3)->posts()->create([
            'title' => 'Taken',
            'autor' => 'Test',
            'img' => 'taken.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
        
        $post22 = Category::find(3)->posts()->create([
            'title' => 'Red Dead',
            'autor' => 'Test',
            'img' => 'red_dead.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
 
        $post23 = Category::find(3)->posts()->create([
            'title' => 'Worcraft',
            'autor' => 'Test',
            'img' => 'worcraft.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
      
        $post24 = Category::find(3)->posts()->create([
            'title' => 'Dota 2',
            'autor' => 'Test',
            'img' => 'dota.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Akcija',
        ]);
     
        $post25 = Category::find(2)->posts()->create([
            'title' => 'Eric Clapton - best of',
            'autor' => 'Eric Clapton',
            'img' => 'eric clapton.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Rock',
        ]);
       
        $post26 = Category::find(2)->posts()->create([
            'title' => 'Carlos Santana - best of',
            'autor' => 'Carlos Santana',
            'img' => 'carlos santana.jpg',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere mi vel augue porta, a dictum enim facilisis. Proin sodales metus ex, commodo eleifend ipsum eleifend sit amet. Sed id ante purus. Vestibulum eros lacus, tristique in ipsum eget, condimentum pellentesque ante. Vestibulum vestibulum odio et vestibulum ultricies. Duis et nunc id tortor lacinia vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices volutpat dolor, sed pulvinar sapien tristique quis. Sed ac nibh a augue interdum fermentum nec at nunc. Fusce non felis et nisl eleifend imperdiet. Aliquam eu leo ultricies, vehicula augue quis, rutrum justo. Phasellus malesuada rutrum lacus, non pretium leo lacinia nec.</p>
            <p>Fusce iaculis tristique ipsum vitae condimentum. Ut quis scelerisque magna. Ut condimentum, est a mattis gravida, turpis ligula iaculis erat, id tincidunt lacus nibh a nisi. Donec id suscipit diam, vitae tincidunt nisi. Mauris aliquet dolor at ex maximus pulvinar. Etiam et urna non metus rutrum tincidunt a a massa. Quisque et varius est. Morbi non massa id nulla commodo commodo sit amet vel nulla. Suspendisse potenti. Aenean iaculis scelerisque eros. Proin scelerisque lobortis elit, non cursus turpis auctor a. Etiam scelerisque urna ut fermentum tincidunt. Quisque viverra ante mauris, id iaculis velit vehicula vitae.</p>',
            'genre' => 'Rock',
        ]);
    }
}
