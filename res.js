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
            case "Бар":
                return "bar";
            case "Бершадь":
                return "bershad";
            case "Винница":
                return "vinnitsa";
            case "Гайсин":
                return "gaysin";
            case "Гнивань":
                return "gnivan";
            case "Жмерика":
                return "zhmerinka";
            case "Ильинцы":
                return "ilintsy";
            case "Казатин":
                return "kazatin";
            case "Калиновка":
                return "kalinovka";
            case "Крыжополь":
                return "kryzhopol";
            case "Ладыжин":
                return "ladyzhin";
            case "Липовец":
                return "lipovets";
            case "Могилев-Подольский":
                return "mogilyev-podolskiy";
            case "Немиров":
                return "nemirov";
            case "Песочин":
                return "pesochin";
            case "Погребище":
                return "pogrebishche";
            case "Стрижавка":
                return "strizhavka";
            case "Тульчин":
                return "tulchin";
            case "Хмельник":
                return "khmelnik";
            case "Чечельник":
                return "chechelnik";
            case "Шаргород":
                return "shargorod";
            case "Ямполь":
                return "yampol";

            case "Берестечко":
                return "berestechko";
            case "Владимир-Волынский":
                return "vladimir-volynskiy";
            case "Горохов":
                return "gorokhov";
            case "Иваничи":
                return "ivanichi";
            case "Камень-Каширский":
                return "kamen-kashirskiy";
            case "Киверцы":
                return "kivertsy";
            case "Ковель":
                return "kovel";
            case "Луцк":
                return "lutsk";
            case "Любешов":
                return "lyubeshov";
            case "Любомль":
                return "lyuboml";
            case "Маневичи":
                return "manevichi";
            case "Нововолынск":
                return "novovolynsk";
            case "Ратно":
                return "ratno";
            case "Рожище":
                return "rozhishche";
            case "Старая Выжевка":
                return "staraya-vyzhevka";
            case "Турийск":
                return "turiysk";
            case "Устилуг":
                return "ustilug";
            case "Цумань":
                return "tsuman";
            case "Шацк":
                return "shatsk";

            case "Апостолово":
                return "apostolovo";
            case "Верхнеднепровск":
                return "verhnedneprovsk";
            case "Вольногорск":
                return "volnogorsk";
            case "Днепр":
                return "dnepr";
            case "Желтые Воды":
                return "zhyeltye-vody";
            case "Каменское":
                return "kamenskoe";
            case "Кривой Рог":
                return "krivoyrog";
            case "Марганец":
                return "marganets";
            case "Никополь":
                return "nikopol";
            case "Новомосковск":
                return "novomoskovsk";
            case "Орджоникидзе":
                return "ordzhonikidze";
            case "Павлоград":
                return "pavlograd";
            case "Перещепино":
                return "pereshchepino";
            case "Першотравенск":
                return "pershotravensk";
            case "Подгородное":
                return "podgorodnoe";
            case "Пятихатки":
                return "pyatikhatki";
            case "Синельниково":
                return "sinelnikovo";
            case "Терновка":
                return "ternovka";

            case "Авдеевка":
                return "avdeevka";
            case "Александровка":
                switch (rusRegion) {
                    case "Донецкая":
                        return "aleksandrovka";
                    case "Николаевская":
                        return "aleksandrovka_665";
                }
            case "Амвросиевка":
                return "amvrosievka";
            case "Артемовск":
                switch (rusRegion) {
                    case "Донецкая":
                        return "artemovsk";
                    case "Луганская":
                        return "artyemovsk";
                }
            case "Волноваха":
                return "volnovakha";
            case "Горловка":
                return "gorlovka";
            case "Дебальцево":
                return "debaltsevo";
            case "Дзержинск":
                return "dzerzhinsk";
            case "Димитров":
                return "dimitrov";
            case "Доброполье":
                return "dobropole";
            case "Докучаевск":
                return "dokuchaevsk";
            case "Донецк":
                return "donetsk";
            case "Дружковка":
                return "druzhkovka";
            case "Енакиево":
                return "enakievo";
            case "Ждановка":
                return "zhdanovka";
            case "Зугрэс":
                return "zugres";
            case "Кировское":
                return "kirovskoe";
            case "Константиновка":
                return "konstantinovka";

            case "Андрушевка":
                return "andrushevka";
            case "Барановка":
                return "baranovka_20143";
            case "Бердичев":
                return "berdichev";
            case "Володарск-Волынский":
                return "volodarsk-volynskiy";
            case "Емильчино":
                return "yemilchino";
            case "Житомир":
                return "zhitomir";
            case "Иршанск":
                return "irshansk";
            case "Коростень":
                return "korosten";
            case "Коростышев":
                return "korostyshev";
            case "Малин":
                return "malin";
            case "Новоград-Волынский":
                return "novograd-volynskiy";
            case "Овруч":
                return "ovruch";
            case "Олевск":
                return "olevsk";
            case "Попельня":
                return "popelnya";
            case "Радомышль":
                return "radomyshl";
            case "Романов":
                return "romanov";
            case "Черняхов":
                return "chernyahov";

            case "Берегово":
                return "beregovo";
            case "Буштына":
                return "bushtyna";
            case "Великий Бычков":
                return "velikiy-bychkov";
            case "Виноградов":
                return "vinogradov";

            case "Десна":
                return "desna";
            case "Ичня":
                return "ichnya";
            case "Козелец":
                return "kozelets";
            case "Корюковка":
                return "koryukovka";
            case "Мена":
                return "mena";
            case "Нежин":
                return "nezhin";
            case "Новгород-Северский":
                return "novgorod-severskiy";
            case "Носовка":
                return "nosovka";
            case "Прилуки":
                return "priluki";
            case "Седнев":
                return "sednev";
            case "Семеновка":
                return "semyenovka";
            case "Чернигов":
                return "chernigov";
            case "Щорс":
                return "schors";

            case "Берегомет":
                return "beregomet";
            case "Вашковцы":
                return "vashkovtsy";
            case "Вижница":
                return "vizhnitsa";
            case "Герца":
                return "gertsa";
            case "Глыбокая":
                return "glybokaya";
            case "Заставна":
                return "zastavna";
            case "Кельменцы":
                return "kelmentsy";
            case "Кицмань":
                return "kitsman";
            case "Красноильск":
                return "krasnoilsk";
            case "Новоднестровск":
                return "novodnestrovsk";
            case "Новоселица":
                return "novoselitsa";
            case "Путила":
                return "putila";
            case "Сокиряны":
                return "sokiryany";
            case "Сторожинец":
                return "storozhinets";
            case "Хотин":
                return "khotin";
            case "Черновцы":
                return "chernovtsy";
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

    let obj = new JSONRequireObject(
        elements.area.value,
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
        "USD",
        document.getElementById('accuracy').value
    );

    var str_json = JSON.stringify(obj);

    var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {

            console.log(xhr.responseText);
            let elements = JSON.parse(xhr.responseText);

            let c = 0;

            for (let el of captions) {
                el.textContent = elements[c++].headline;
            }

            c = 0;

            for (let el of logos) {
                let img = document.createElement("img");
                img.src = elements[c++].photo;
                el.innerHTML = "";
                el.appendChild(img);
            }

            c = 0;

            for (let el of descriptions) {
                el.textContent = elements[c++].description;
            }

            var averSum = 0;
            var count = 0;
            for (let el of elements) {
                averSum += parseInt(el.moneyValue);
                count++;
            }

            document.getElementById('averSum').textContent = averSum / count;

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
                    // "<td>" + elements[i].furniture + "</td>" +
                    // "<td>" + elements[i].devices + "</td>" +
                    // "<td>" + elements[i].multimedia + "</td>" +
                    //"<td>" + elements[i].comfort + "</td>" +
                    //"<td>" + elements[i].communication + "</td>" +
                    //"<td>" + elements[i].infrastructure + "</td>" +
                    "<td>" + elements[i].landscape + "</td>" +
                    //"<td>" + elements[i].description + "</td>" +
                    "<td>" + elements[i].lengthsToCity + "</td>" +
                    "<td>" + elements[i].landSquare + "</td>" +
                    "<td>" + elements[i].cadastralNumber + "</td>" +
                    "<td>" + elements[i].outHeatingWall + "</td>" +
                    "<td>" + elements[i].roofType + "</td>" +
                    "<td>" + elements[i].builtYear + "</td>";
                info.appendChild(tr);
            }

            var itemscont = document.getElementById('itemscont');


        }
    };

    xhr.open("POST", '../index2.php', true);

    xhr.send(str_json);

    e.preventDefault();
}