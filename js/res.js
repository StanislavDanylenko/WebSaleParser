class JSONRequireObject {

    constructor(rusRegion,
                rusCity,
                buildType,
                rusBuyRent,
                floorCountMin,
                floorCountMax,
                floorMin,
                floorMax,
                roomNumberMin,
                roomNumberMax,
                areaMin,
                areaMax,
                priceType,
                countRequest) {
        this.location = this.getEnglishCity(rusRegion, rusCity);
        this.typeBuild = buildType;
        this.buyRent = rusBuyRent;
        this.floorCountMin = floorCountMin;
        this.floorCountMax = floorCountMax;
        this.floorMin = floorMin;
        this.floorMax = floorMax;
        this.roomNumberMin = roomNumberMin;
        this.roomNumberMax = roomNumberMax;
        this.areaMin = areaMin;
        this.areaMax = areaMax;
        this.priceType = priceType;
        this.countRequest = countRequest;
    }

    getEnglishRegion(rusRegion) {
        switch (rusRegion) {
            case "Винницкая":
                return "vin";
            case "Волынская":
                return "vol";
            case "Днепропетровская":
                return "dnp";
            case "Донецкая":
                return "don";
            case "Житомирская":
                return "zht";
            case "Закарпатская":
                return "zak";
            case "Запорожская":
                return "zap";
            case "Ивано-Франковская":
                return "if";
            case "Киевская":
                return "ko";
            case "Кировоградская":
                return "kir";
            case "Крым":
                return "cri";
            case "Луганская":
                return "lug";
            case "Львовская":
                return "lv";
            case "Николаевская":
                return "nik";
            case "Одесская":
                return "od";
            case "Полтавская":
                return "pol";
            case "Ровенская":
                return "rov";
            case "Сумская":
                return "sum";
            case "Тернопольская":
                return "ter";
            case "Харьковская":
                return "kha";
            case "Херсонская":
                return "khe";
            case "Хмельницкая":
                return "khm";
            case "Черкасская":
                return "chk";
            case "Черниговская":
                return "chn";
            case "Черновицкая":
                return "chv";
        }

        return "";
    }

    getEnglishCity(rusRegion, rusCity) {
        switch (rusCity) {
            case "Бар": return "bar";
            case "Бершадь": return "bershad";
            case "Винница": return "vinnitsa";
            case "Гайсин": return "gaysin";
            case "Гнивань": return "gnivan";
            case "Жмерика": return "zhmerinka";
            case "Ильинцы": return "ilintsy";
            case "Казатин": return "kazatin";
            case "Калиновка": return "kalinovka";
            case "Крыжополь": return "kryzhopol";
            case "Ладыжин": return "ladyzhin";
            case "Липовец": return "lipovets";
            case "Могилев-Подольский": return "mogilyev-podolskiy";
            case "Немиров": return "nemirov";
            case "Песочин": return "pesochin";
            case "Погребище": return "pogrebishche";
            case "Стрижавка": return "strizhavka";
            case "Тульчин": return "tulchin";
            case "Хмельник": return "khmelnik";
            case "Чечельник": return "chechelnik";
            case "Шаргород": return "shargorod";
            case "Ямполь": return "yampol";

            case "Берестечко": return "berestechko";
            case "Владимир-Волынский": return "vladimir-volynskiy";
            case "Горохов": return "gorokhov";
            case "Иваничи": return "ivanichi";
            case "Камень-Каширский": return "kamen-kashirskiy";
            case "Киверцы": return "kivertsy";
            case "Ковель": return "kovel";
            case "Луцк": return "lutsk";
            case "Любешов": return "lyubeshov";
            case "Любомль": return "lyuboml";
            case "Маневичи": return "manevichi";
            case "Нововолынск": return "novovolynsk";
            case "Ратно": return "ratno";
            case "Рожище": return "rozhishche";
            case "Старая Выжевка": return "staraya-vyzhevka";
            case "Турийск": return "turiysk";
            case "Устилуг": return "ustilug";
            case "Цумань": return "tsuman";
            case "Шацк": return "shatsk";

            case "Апостолово": return "apostolovo";
            case "Верхнеднепровск": return "verhnedneprovsk";
            case "Вольногорск": return "volnogorsk";
            case "Днепр": return "dnepr";
            case "Желтые Воды": return "zhyeltye-vody";
            case "Каменское": return "kamenskoe";
            case "Кривой Рог": return "krivoyrog";
            case "Марганец": return "marganets";
            case "Никополь": return "nikopol";
            case "Новомосковск": return "novomoskovsk";
            case "Орджоникидзе": return "ordzhonikidze";
            case "Павлоград": return "pavlograd";
            case "Перещепино": return "pereshchepino";
            case "Першотравенск": return "pershotravensk";
            case "Подгородное": return "podgorodnoe";
            case "Пятихатки": return "pyatikhatki";
            case "Синельниково": return "sinelnikovo";
            case "Терновка": return "ternovka";

            case "Авдеевка": return "avdeevka";
            case "Александровка":
                switch (rusRegion) {
                    case "Донецкая": return "aleksandrovka";
                    case "Николаевская": return "aleksandrovka_665";
                }
            case "Амвросиевка": return "amvrosievka";
            case "Артемовск":
                switch (rusRegion) {
                    case "Донецкая": return "artemovsk";
                    case "Луганская": return "artyemovsk";
                }
            case "Волноваха": return "volnovakha";
            case "Горловка": return "gorlovka";
            case "Дебальцево": return "debaltsevo";
            case "Дзержинск": return "dzerzhinsk";
            case "Димитров": return "dimitrov";
            case "Доброполье": return "dobropole";
            case "Докучаевск": return "dokuchaevsk";
            case "Донецк": return "donetsk";
            case "Дружковка": return "druzhkovka";
            case "Енакиево": return "enakievo";
            case "Ждановка": return "zhdanovka";
            case "Зугрэс": return "zugres";
            case "Кировское": return "kirovskoe";
            case "Константиновка": return "konstantinovka";
            case "Краматорск": return "kramatorsk";
            case "Красноармейск": return "krasnoarmeysk";
            case "Красный Лиман": return "krasnyyliman";
            case "Майорск": return "mayorsk";
            case "Макеевка": return "makeevka";
            case "Мариуполь": return "mariupol";
            case "Марьинка": return "marinka";
            case "Новоазовск": return "novoazovsk";
            case "Новогродовка": return "novogrodovka";
            case "Селидово": return "selidovo";
            case "Славянск": return "slavyansk";
            case "Снежное": return "snezhnoe";
            case "Соледар": return "soledar";
            case "Старобешево": return "starobeshevo";
            case "Торез": return "torez";
            case "Угледар": return "ugledar";
            case "Харцызск": return "khartsyzsk";
            case "Шахтерск": return "shakhtyersk";
            case "Ясиноватая": return "yasinovataya";


            case "Андрушевка": return "andrushevka";
            case "Барановка": return "baranovka_20143";
            case "Бердичев": return "berdichev";
            case "Володарск-Волынский": return "volodarsk-volynskiy";
            case "Емильчино": return "yemilchino";
            case "Житомир": return "zhitomir";
            case "Иршанск": return "irshansk";
            case "Коростень": return "korosten";
            case "Коростышев": return "korostyshev";
            case "Малин": return "malin";
            case "Новоград-Волынский": return "novograd-volynskiy";
            case "Овруч": return "ovruch";
            case "Олевск": return "olevsk";
            case "Попельня": return "popelnya";
            case "Радомышль": return "radomyshl";
            case "Романов": return "romanov";
            case "Черняхов": return "chernyahov";

            case "Берегово": return "beregovo";
            case "Буштына": return "bushtyna";
            case "Великий Бычков": return "velikiy-bychkov";
            case "Виноградов": return "vinogradov";
            case "Вышково": return "vyshkovo";
            case "Дубовое": return "dubovoye";
            case "Иршава": return "irshava";
            case "Королево": return "korolevo";
            case "Межгорье": return "mezhgorye";
            case "Мукачево": return "mukachevo";
            case "Перечин": return "perechin";
            case "Рахов": return "rakhov";
            case "Свалява": return "svalyava";
            case "Солотвина": return "solotvina";
            case "Тячев": return "tyachev";
            case "Ужгород": return "uzhgorod";
            case "Хуст": return "khust";
            case "Чоп": return "chop";

            case "Акимовка": return "akimovka";
            case "Беляевка":
                switch (rusRegion) {
                    case "Запорожская": return "belyaevka_475";
                    case "Одесская": return "belyaevka_43045";
                }
            case "Бердянск": return "berdyansk";
            case "Васильевка": return "vasilevka";
            case "Веселое": return "veseloe";
            case "Вольнянск": return "volnyansk";
            case "Гуляйполе": return "gulyaypole";
            case "Днепрорудное": return "dneprorudnoe";
            case "Запорожье": return "zaporozhe";
            case "Каменка-Днепровская": return "kamenka-dneprovskaya";
            case "Куйбышево": return "kamenka-dneprovskaya";
            case "Кушугум": return "kushugum";
            case "Мелитополь": return "melitopol";
            case "Михайловка": return "mihaylovka";
            case "Молочанск": return "molochansk";
            case "Орехов": return "orekhov";
            case "Пологи": return "pologi";
            case "Приморск": return "primorsk";
            case "Розовка": return "rozovka";
            case "Токмак": return "tokmak";
            case "Энергодар": return "energodar";


            case "Богородчаны": return "bogorodchany";
            case "Болехов": return "bolekhov";
            case "Бурштын": return "burshtyn";
            case "Галич": return "galich";
            case "Городенка": return "gorodenka";
            case "Делятин": return "delyatin";
            case "Долина": return "dolina";
            case "Ивано-Франковск": return "ivano-frankovsk";
            case "Калуш": return "kalush";
            case "Коломыя": return "kolomyya";
            case "Косов": return "kosov";
            case "Ланчин": return "lanchin";
            case "Надворная": return "nadvornaya";
            case "Перегинское": return "pereginskoye";
            case "Рогатин": return "rogatin";
            case "Снятын": return "snyatyn";
            case "Тлумач": return "tlumach";
            case "Тысменица": return "tysmenitsa";
            case "Яремче": return "yaremche";

            case "Барышевка": return "baryshevka";
            case "Белая Церковь": return "belayatserkov";
            case "Березань": return "berezan";
            case "Богуслав": return "berezan";
            case "Борисполь": return "borispol";
            case "Бородянка": return "borodyanka";
            case "Боярка": return "boyarka";
            case "Бровары": return "brovary";
            case "Буча": return "bucha";
            case "Васильков": return "vasilkov";
            case "Вишневое": return "vishnevoe";
            case "Володарка": return "volodarka";
            case "Вышгород": return "vyshgorod";
            case "Глеваха": return "glevaxa";
            case "Гостомель": return "gostomel";
            case "Иванков": return "ivankov";
            case "Ирпень": return "irpen";
            case "Кагарлык": return "kagarlyk";
            case "Киев": return "kiev";
            case "Коцюбинское": return "kotsyubinskoe";
            case "Макаров": return "makarov";
            case "Мироновка": return "mironovka";
            case "Обухов": return "obukhov";
            case "Переяслав-Хмельницкий": return "pereyaslav-khmelnitskiy";
            case "Припять": return "pripyat";
            case "Ржищев": return "rzhishchev";
            case "Рокитное": return "rokitnoe";
            case "Сквира": return "skvira";
            case "Славутич": return "slavutich";
            case "Тараща": return "tarashcha";
            case "Тетиев": return "tetiev";
            case "Узин": return "uzin";
            case "Украинка": return "ukrainka";
            case "Фастов": return "fastov";
            case "Чернобыль": return "chernobyl";
            case "Яготин": return "yagotin";


            case "Александрия": return "aleksandriya";
            case "Бобринец": return "bobrinets";
            case "Власовка": return "vlasovka";
            case "Гайворон": return "gayvoron";
            case "Долинская": return "dolinskaya";
            case "Знаменка":
                switch (rusRegion) {
                    case "Крым": return "znamenka_372";
                    case "Кировоградская": return "znamenka";
                }
            case "Кропивницкий": return "kropivnitskiy";
            case "Малая Виска": return "malayaviska";
            case "Новая Прага": return "novaya-praga";
            case "Новоархангельск": return "novoarkhangelsk";
            case "Новое": return "novoye";
            case "Новомиргород": return "novomirgorod";
            case "Новоукраинка": return "novoukrainka";
            case "Первомайск":
                switch (rusRegion) {
                    case "Кировоградская": return "pervomaysk_56";
                    case "Луганская": return "pervomaysk_326";
                    case "Николаевская": return "pervomaysk";
                }
            case "Петрово": return "petrovo";
            case "Помошная": return "pomoshnaya";
            case "Светловодск": return "svetlovodsk";
            case "Смолино": return "smolino";

            case "Алупка": return "alupka";
            case "Алушта": return "alushta";
            case "Армянск": return "armyansk";
            case "Бахчисарай": return "bakhchisaray";
            case "Белогорск": return "belogorsk";
            case "Береговое": return "beregovo_345";
            case "Джанкой": return "dzhankoy";
            case "Евпатория": return "evpatoriya";
            case "Инкерман": return "inkerman";
            case "Керчь": return "kerch";
            case "Красногвардейское": return "krasnogvardeiskoe";
            case "Красноперекопск": return "krasnoperekopsk";
            case "Раздольное": return "razdolnoye";
            case "Саки": return "saki";
            case "Севастополь": return "sevastopol";
            case "Симферополь": return "simferopol";
            case "Старый Крым": return "staryy-krym";
            case "Судак": return "sudak";
            case "Феодосия": return "feodosiya";
            case "Черноморское": return "chernomorskoye";
            case "Щёлкино": return "shchyelkino";
            case "Ялта": return "yalta";


            case "Александровск": return "aleksandrovsk";
            case "Алмазная": return "almaznaya";
            case "Алчевск": return "alchevsk";
            case "Антрацит": return "antratsit";
            case "Брянка": return "bryanka";
            case "Вахрушево": return "vakhrushevo";
            case "Горное": return "gornoe";
            case "Горское": return "gorskoe";
            case "Зимогорье": return "zimogore";
            case "Золотое": return "zolotoe";
            case "Зоринск": return "zorinsk";
            case "Ирмино": return "teplogorsk";
            case "Кировск": return "kirovsk";
            case "Краснодон": return "krasnodon";
            case "Краснопартизанск": return "krasnopartizansk";
            case "Красный Луч": return "krasnyyluch";
            case "Кременная": return "kremennaya";
            case "Лисичанск": return "kremennaya";
            case "Луганск": return "lugansk";
            case "Лутугино": return "lutugino";
            case "Миусинск": return "miusinsk";
            case "Молодогвардейск": return "molodogvardeysk";
            case "Новодружеск": return "novodruzhesk";
            case "Новопсков": return "novopskov";
            case "Первомайск": return "pervomaysk_326";
            case "Перевальск": return "perevalsk";
            case "Петровское": return "petrovskoe";
            case "Попасная": return "popasnaya";
            case "Приволье": return "privole";
            case "Ровеньки": return "rovenki";
            case "Рубежное": return "rubezhnoe";
            case "Сватово": return "svatovo";
            case "Свердловск": return "sverdlovsk";
            case "Северодонецк": return "severodonetsk";
            case "Станица Луганская": return "stanica-luganskaya";
            case "Старобельск": return "starobelsk";
            case "Стаханов": return "stakhanov";
            case "Суходольск": return "sukhodolsk";
            case "Счастье": return "schaste";
            case "Червонопартизанск": return "chervonopartizansk_433";


            case "Белз": return "belz";
            case "Бобрка": return "bobrka";
            case "Борислав": return "borislav";
            case "Броды": return "brody";
            case "Буск": return "busk";
            case "Великие Мосты": return "velikie-mosty";
            case "Винники": return "vinniki";
            case "Глиняны": return "glinyany";
            case "Городок":
                switch (rusRegion) {
                    case "Львовская": return "gorodok_262";
                    case "Хмельницкая": return "gorodok";
                }
            case "Добромиль": return "dobromil";
            case "Дрогобыч": return "drogobych";
            case "Дубляны": return "dublyany";
            case "Жидачев": return "zhidachev";
            case "Жолква": return "zholkva";
            case "Золочев": return "zolochev";
            case "Каменка-Бугская": return "kamenka-bugskaya";
            case "Львов": return "lvov";
            case "Мостиска": return "mostiska";
            case "Николаев": return "nikolaev";
            case "Новояворовск": return "novoyavorovsk";
            case "Новый Роздол": return "novyy-rozdol";
            case "Перемышляны": return "peremyshlyane";
            case "Пустомыты": return "pustomyty";
            case "Рава-Русская": return "rava-russkaya";
            case "Радехов": return "radekhov";
            case "Рудки": return "radekhov";
            case "Самбор": return "rudki";
            case "Сколе": return "skole";
            case "Сокаль": return "Сокаль";
            case "Сосновка": return "sosnovka";
            case "Старый Самбор": return "staryy-sambor";
            case "Стебник": return "stebnik";
            case "Стрый": return "stryy";
            case "Трускавец": return "truskavets";
            case "Угнев": return "ugnev";
            case "Хыров": return "khyrov";
            case "Червоноград": return "chervonograd";
            case "Яворов": return "yavorov";

            case "Александровка": return "aleksandrovka_665";
            case "Арбузинка": return "arbuzinka";
            case "Баштанка": return "bashtanka";
            case "Березнеговатое": return "bereznegovatoye";
            case "Братское": return "bratskoye";
            case "Веселиново": return "veselinovo";
            case "Вознесенск": return "voznesensk";
            case "Врадиевка": return "vradievka";
            case "Доманевка": return "domanevka";
            case "Еланец": return "yelanets";
            case "Казанка": return "kazanka";
            case "Кривое Озеро": return "krivoe-ozero";
            case "Николаев": return "nikolaev_106";
            case "Новая Одесса": return "novaya-odessa";
            case "Новый Буг": return "novyybug";
            case "Очаков": return "ochakov";
            case "Снигиревка": return "snigirevka";
            case "Южноукраинск": return "yuzhnoukrainsk";

            case "Ананьев": return "ananev";
            case "Арциз": return "artsiz";
            case "Балта": return "balta";
            case "Белгород-Днестровский": return "belgorod-dnestrovskiy";
            case "Березовка": return "berezovka";
            case "Болград": return "bolgrad";
            case "Великодолинское": return "velikodolinskoe";
            case "Измаил": return "izmail";
            case "Ильичевск": return "ilichyevsk";
            case "Килия": return "kiliya";
            case "Кодыма": return "kodyma";
            case "Котовск": return "kotovsk";
            case "Любашевка": return "lyubashevka";
            case "Овидиополь": return "ovidiopol";
            case "Одесса": return "odessa";
            case "Раздельная": return "razdelnaya";
            case "Рени": return "reni";
            case "Татарбунары": return "tatarbunary";
            case "Теплодар": return "teplodar";
            case "Ширяево": return "shiryaevo";
            case "Южное": return "yuzhnoe";


            case "Гадяч": return "gadyach";
            case "Глобино": return "globino";
            case "Горишные Плавни": return "gorishnyye%20plavni";
            case "Градижск": return "gradizhsk";
            case "Гребенка": return "grebyenka";
            case "Дергачи":
                switch (rusRegion) {
                    case "Полтавская": return "dergachi_277";
                    case "Харьковская": return "dergachi";
                }
            case "Диканька": return "dikanka";
            case "Зеньков": return "zenkov";
            case "Карловка": return "karlovka";
            case "Кобеляки": return "kobelyaki";
            case "Котельва": return "kotelva";
            case "Кременчуг": return "kremenchug";
            case "Лохвица": return "lokhvitsa";
            case "Лубны": return "lubny";
            case "Миргород": return "mirgorod";
            case "Новые Санжары": return "novyye-sanzhary";
            case "Пирятин": return "piryatin";
            case "Полтава": return "poltava";
            case "Решетиловка": return "reshetilovka";
            case "Хорол": return "khorol";
            case "Червонозаводское": return "chervonozavodskoe";
            case "Чутово": return "chutovo";


            case "Березне": return "berezne";
            case "Вараш": return "varash";
            case "Владимирец": return "vladimirets";
            case "Дубно": return "dubno";
            case "Дубровица": return "dubrovitsa";
            case "Заречное": return "zarechnoye";
            case "Здолбунов": return "zdolbunov";
            case "Квасилов": return "kvasilov";
            case "Клевань": return "klevan";
            case "Корец": return "korets";
            case "Костополь": return "kostopol";
            case "Млинов": return "mlinov";
            case "Острог": return "ostrog";
            case "Радивилов": return "radivilov";
            case "Ровно": return "rovno";
            case "Рокитное": return "rokitnoe_699";
            case "Сарны": return "sarny";

            case "Ахтырка": return "akhtyrka";
            case "Белополье": return "belopole";
            case "Бурынь": return "buryn";
            case "Ворожба": return "vorozhba";
            case "Воронеж": return "voronezh";
            case "Глухов": return "glukhov";
            case "Дружба": return "druzhba";
            case "Конотоп": return "konotop";
            case "Краснополье": return "krasnopolye";
            case "Кролевец": return "krolevets";
            case "Лебедин": return "lebedin";
            case "Путивль": return "putivl";
            case "Ромны": return "romny";
            case "Свесса": return "svessa";
            case "Середина-Буда": return "seredina-buda";
            case "Сумы": return "sumy";
            case "Тростянец": return "trostyanets";
            case "Шостка": return "shostka";

            case "Бережаны": return "berezhany";
            case "Борщев": return "borshchyev";
            case "Бучач": return "buchach";
            case "Великая Березовица": return "velikaya-berezovitsa";
            case "Гусятин": return "gusyatin";
            case "Залещики": return "zaleshchiki";
            case "Збараж": return "zbarazh";
            case "Зборов": return "zborov";
            case "Козова": return "kozova";
            case "Копычинцы": return "kopychintsy";
            case "Кременец": return "kremenets";
            case "Лановцы": return "lanovtsy";
            case "Монастыриска": return "monastyriska";
            case "Подволочиск": return "podvolochisk";
            case "Подгайцы": return "podgaytsy";
            case "Почаев": return "pochaev";
            case "Скалат": return "skalat";
            case "Теребовля": return "terebovlya";
            case "Тернополь": return "ternopol";
            case "Хоростков": return "khorostkov";
            case "Чертков": return "chertkov";
            case "Шумск": return "shumsk";



            case "Балаклея": return "balakleya";
            case "Барвенково": return "barvenkovo";
            case "Богодухов": return "bogodukhov";
            case "Валки": return "valki";
            case "Великий Бурлук": return "velikiy-burluk";
            case "Волчанск": return "volchansk";
            case "Высокий": return "vysokiy";
            case "Змиев": return "zmiev";
            case "Изюм": return "izyum";
            case "Комсомольское": return "komsomolskoye";
            case "Красноград": return "krasnograd";
            case "Купянск": return "kupyansk";
            case "Лозовая": return "lozovaya";
            case "Люботин": return "lyubotin";
            case "Мерефа": return "merefa";
            case "Новая Водолага": return "novaya-vodolaga";
            case "Первомайский": return "pervomayskiy";
            case "Солоницевка": return "solonitsevka";
            case "Харьков": return "kharkov";
            case "Чугуев": return "chuguev";



            case "Антоновка": return "antonovka";
            case "Белозерка": return "belozerka";
            case "Берислав": return "berislav";
            case "Великая Александровка": return "velikaya-aleksandrovka";
            case "Великая Лепетиха": return "velikaya-lepetikha";
            case "Геническ": return "genichesk";
            case "Голая Пристань": return "golaya-pristan";
            case "Каланчак": return "kalanchak";
            case "Камышаны": return "kamyshany";
            case "Каховка": return "kakhovka";
            case "Новая Каховка": return "novaya-kakhovka";
            case "Новая Маячка": return "novaya-mayachka";
            case "Новоалексеевка": return "novoalekseyevka";
            case "Новотроицкое": return "novotroitskoye";
            case "Пойма": return "poyma";
            case "Скадовск": return "skadovsk";
            case "Таврийск": return "tavriysk";
            case "Херсон": return "kherson";
            case "Чаплинка": return "chaplinka";
            

            case "Виньковцы": return "vinkovtsy";
            case "Волочиск": return "volochisk";
            case "Деражня": return "derazhnya";
            case "Дунаевцы": return "dunaevtsy";
            case "Изяслав": return "izyaslav";
            case "Каменец-Подольский": return "kamenets-podolskiy";
            case "Красилов": return "krasilov";
            case "Летичев": return "letichev";
            case "Нетешин": return "neteshin";
            case "Полонное": return "polonnoe";
            case "Понинка": return "poninka";
            case "Славута": return "slavuta";
            case "Староконстантинов": return "starokonstantinov";
            case "Теофиполь": return "teofipol";
            case "Хмельницкий": return "khmelnitskiy";
            case "Шепетовка": return "shepetovka";

            case "Ватутино": return "vatutino";
            case "Городище": return "gorodishche";
            case "Драбов": return "drabov";
            case "Жашков": return "zhashkov";
            case "Звенигородка": return "zvenigorodka";
            case "Золотоноша": return "zolotonosha";
            case "Каменка": return "kamenka";
            case "Канев": return "kanev";
            case "Корсунь-Шевченковский": return "korsun-shevchenkovskiy";
            case "Лысянка": return "lysyanka";
            case "Маньковка": return "mankovka";
            case "Монастырище": return "monastyrishche";
            case "Смела": return "smela";
            case "Тальное": return "talnoe";
            case "Умань": return "uman";
            case "Христиновка": return "khristinovka";
            case "Черкассы": return "cherkassy";
            case "Чернобай": return "chernobay";
            case "Чигирин": return "chigirin";
            case "Шпола": return "shpola";



            case "Бахмач": return "bakhmach";
            case "Бобровица": return "bobrovitsa";
            case "Борзна": return "borzna";
            case "Городня": return "gorodnya";
            case "Десна": return "desna";
            case "Ичня": return "ichnya";
            case "Козелец": return "kozelets";
            case "Корюковка": return "koryukovka";
            case "Мена": return "mena";
            case "Нежин": return "nezhin";
            case "Новгород-Северский": return "novgorod-severskiy";
            case "Носовка": return "nosovka";
            case "Прилуки": return "priluki";
            case "Седнев": return "sednev";
            case "Семеновка": return "semyenovka";
            case "Чернигов": return "chernigov";
            case "Щорс": return "schors";

            case "Берегомет": return "beregomet";
            case "Вашковцы": return "vashkovtsy";
            case "Вижница": return "vizhnitsa";
            case "Герца": return "gertsa";
            case "Глыбокая": return "glybokaya";
            case "Заставна": return "zastavna";
            case "Кельменцы": return "kelmentsy";
            case "Кицмань": return "kitsman";
            case "Красноильск": return "krasnoilsk";
            case "Новоднестровск": return "novodnestrovsk";
            case "Новоселица": return "novoselitsa";
            case "Путила": return "putila";
            case "Сокиряны": return "sokiryany";
            case "Сторожинец": return "storozhinets";
            case "Хотин": return "khotin";
            case "Черновцы": return "chernovtsy";
        }

        return "";
    }

    getEnglishBuildType(rusBuildType) {
        switch (rusBuildType.toLowerCase()) {
            case "дом":
                return "house";
            case "квартира":
                return "apartment";
        }

        return "";
    }

    getEnglishBuyRent(rusBuyRent) {
        switch (rusBuyRent.toLowerCase()) {
            case "покупка":
                return "buy";
            case "аренда":
                return "rent";
        }

        return "";
    }


}


let captions = document.getElementsByClassName("caption");
let logos = document.getElementsByClassName("resLogo");
let descriptions = document.getElementsByClassName("description");

document.getElementById('getData').onclick = function (e) {
    var elements = document.forms[0];
    document.getElementById('wait').classList.add('wait');
    document.getElementById('body').classList.add('open_body');
    let obj = new JSONRequireObject(
        elements.area.value.match(/.*?(?=\s)/),
        elements.city.value,
        elements.building.value,
        elements.operation.value,
        elements.floor1.value,
        elements.floor2.value,
        elements.floor3.value,
        elements.floor4.value,
        elements['numberOfRoom1'].value,
        elements['numberOfRoom2'].value,
        elements['area-size1'].value,
        elements['area-size2'].value,
        document.querySelector('.current').dataset.type,
        document.getElementById('accuracy').value
    );

    var accuracy = obj.countRequest;
    var str_json = JSON.stringify(obj);

    var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {

            console.log(xhr.responseText);
            let elements = JSON.parse(xhr.responseText);
            if(!elements.length){
                document.getElementById('result').innerHTML = "<h1 class='h1 text-center'>НИЧЕГО НЕ НАЙДЕНО</h1>";
                document.getElementById('wait').classList.remove('wait');
                document.getElementById('body').classList.remove('open_body');
                document.getElementById('result').style.display='block';
                return;
            } else if(elements.length < accuracy){
                document.getElementById('resultError').innerHTML = "<h1 class='h1 text-center'>БЫЛО НАЙДЕНО МЕНЬШЕ РЕЗУЛЬТАТОВ</h1>";
            } else{
                document.getElementById('resultError').innerHTML = "";
            }

            let c = 0;

            for (let el of elements) {
                if (c == 3){
                    break;
                }
                captions[c].textContent = el.headline;
                c++;
            }

            c = 0;

            for (let el of elements) {
                if (c == 3){
                    break;
                }
                let img = document.createElement("img");
                img.src = el.photo;
                logos[c].innerHTML = "";
                logos[c++].appendChild(img);
            }

            c = 0;

            for (let el of elements) {
                if (c == 3){
                    break;
                }
                descriptions[c++].textContent = el.description;
            }

            var averSum = 0;
            var count = 0;
            for (let el of elements) {
                averSum += parseInt(el.moneyValue);
                count++;
            }

            document.getElementById('averSum').textContent = (averSum / count).toFixed(0);
            
            var t;
            switch(elements[0].moneyType){
                case 'USD': t = "$";
                    break;
                case 'EUR': t = "€";
                    break;
                case 'UAH': t = "₴";
                    break;
            }
            
            document.getElementById('moneyType').textContent = t;

            var info = document.getElementById('info');

            for (var i = 0; i < elements.length; i++) {
                var tr = document.createElement('tr');
                tr.innerHTML = "<td><a href='" + elements[i].URL + "'>" + elements[i].URL + "</a></td>" +
                    "<td>" + elements[i].price + "</td>" +
                    "<td>" + elements[i].headline + "</td>" +
                    "<td>" + elements[i].typeSell + "</td>" +
                    "<td>" + elements[i].lessPrice + "</td>" +
                    "<td>" + elements[i].buildingType + "</td>" +
                    "<td>" + elements[i].floorNumber + "</td>" +
                    "<td>" + elements[i].floorCount + "</td>" +
                    "<td>" + elements[i].commonSquare + "</td>" +
                    "<td>" + elements[i].kitchenSquare + "</td>" +
                    "<td>" + elements[i].wallType + "</td>" +
                    "<td>" + elements[i].roomCount + "</td>" +
                    "<td>" + elements[i].layout + "</td>" +
                    "<td>" + elements[i].toilet + "</td>" +
                    "<td>" + elements[i].heating + "</td>" +
                    "<td>" + elements[i].repair + "</td>" +
                    "<td>" + elements[i].landscape + "</td>" +
                    "<td>" + elements[i].lengthsToCity + "</td>" +
                    "<td>" + elements[i].landSquare + "</td>" +
                    "<td>" + elements[i].cadastralNumber + "</td>" +
                    "<td>" + elements[i].outHeatingWall + "</td>" +
                    "<td>" + elements[i].roofType + "</td>" +
                    "<td>" + elements[i].builtYear + "</td>";
                info.appendChild(tr);
            }

            var itemscont = document.getElementById('itemscont');
            document.getElementById('wait').classList.remove('wait');
            document.getElementById('body').classList.remove('open_body');
            document.getElementById('result').style.display='block';
            location.href = '#' + 'result';

        }
    };

    xhr.open("POST", '../index2.php', true);

    xhr.send(str_json);

    e.preventDefault();
}