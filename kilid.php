<!DOCTYPE html>
<html>

<head>
    <title>کیلید | سامانه خرید و فروش - رهن و اجاره مسکن</title>
    <link rel="stylesheet" type="text/css" href="./cssFile.css" media="screen" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
    </script>
    <script>
        $(function() {
            $.getJSON('http://hallows.ir/mags', function(data) {
                var secTitle = "<div>" + data.section + "</div>"
                $(secTitle).appendTo("#kilidmag");
                $.each(data.items, function(i, f) {
                    var first = document.createElement("div");
                    first.classList.add("polaroid");
                    document.getElementById("kilidmagPics").appendChild(first);

                    var second = document.createElement("img");
                    second.classList.add("zoom");
                    second.src = f.image;
                    second.setAttribute("style", "width: 100%;");
                    first.appendChild(second);

                    var third = document.createElement("div");
                    third.classList.add("container");
                    third.innerHTML = f.title;
                    first.appendChild(third);
                });
            });
        });
    </script>
</head>

<body>
    <table id="headerTable">
        <tr>
            <td><a id="headerLink2" href="./index.php"> ورود/ثبت نام </a></td>
            <td><a id="headerLink" href="https://kilid.com/pro"> سامانه مشاورین </a></td>
            <td><a id="headerLink" href="https://kilid.com/real-estate-agencies"> آژانس های املاک </a></td>
            <td><a id="headerLink" href="https://kilid.com/housing-market-insight"> اطلاعات بازار مسکن </a></td>
            <td><a id="headerLink" href="https://kilid.com/smart-real-estate-valuations"> قیمت خانه شما </a></td>
            <td><a id="headerLink" href="https://kilid.com/post-real-estate-listings/buy/step1?previewMode=false"> ثبت
					رایگان آگهی </a></td>
            <td><a id="headerLink" href="https://kilid.com/map?type=listing&smartSearch=true&locations=c_2301021576&sort=kilid,DESC">
					جستجو روی نقشه </a></td>
            <td><a id="headerLink" href="https://kilid.com/rent"> رهن و اجاره </a></td>
            <td><a id="headerLink" href="./buy.html"> خرید </a></td>
            <td>
                <a href="./kilid.html"><img src="https://www.kilidstatic.com/Kilid-eng-logo.png" height="30" width="90" />
                </a>
            </td>
        </tr>
    </table>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <br /><br /><br /><br /><br /><br />
    <div style="text-align: center">
        <h2>کیلید، سامانه هوشمند مسکن</h2>
    </div>

    <div style="text-align: center ; font-size:11pt">
        <span><a id="searchLink" href="./kilid.html">قیمت خانه شما؟</a></span>
        <span><a id="searchLink" href="./kilid.html">رهن و اجاره</a></span>
        <span><a id="searchLink" href="./kilid.html">خرید</button></a></span></div>

    <form action="https://google.com" method="get" style="text-align: center">
        <span><input id="img" type="image"
				src="https://www.pngkey.com/png/full/193-1933251_128656-simple-red-square-icon-business-magnifying-glass.png"
				height="50" width="50" /></span>
        <span><input id="searchInput" type="text" name="region" value="" size="40" maxlength="100"
				placeholder="نام محله، منطقه و یا ایستگاه مترو" /></span>
        <span><input list="towns" id="searchInput" type="text" name="cityName" value="تهران" size="10" maxlength="20"
				placeholder="نام شهر" /></span>
        <datalist id="towns">
			<option value="تهران">
			<option value="شیراز">
			<option value="اصفهان">
			<option value="کرمان">
			<option value="اردبیل">
			<option value="یزد">
			<option value="گیلان">
			<option value="کرمانشاه">
			<option value="مشهد">
			<option value="تبریز">
			<option value="اهواز">
			<option value="ارومیه">
		</datalist>
    </form>

    <br />
    <div style="text-align: center">
        <a href="./kilid.html#SctionResult"><img src="https://cdn4.iconfinder.com/data/icons/iready-symbols-arrows-vol-1/28/004_005_down_arrow_next_bottom_end_circle1x-512.png" height="30" width="30"></a>
    </div>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <br /><br /><br /><br /><br /><br /><br /><br />
    <a id="SctionResult"><br /></a>

    <div class="relative">
        <h2 style="color:#B30753">بازار مسکن را ارزیابی کنید</h2>
    </div>

    <div class="relative2">
        <p>در بازار مسکن، داشتن اطلاعات و داده های دقیق «طلایی ترین فرصتها» را برای خریداران و سرمایه گذاران فراهم می کند. در کیلید این داده ها و اطلاعات پردازش شده و نتیجه پردازش در اختیار مشترکان کیلید قرار می گیرد. با تحلیل گذشته و رصد کردن امروز بازار
            مسکن، خانه آینده را بسازید</p>
    </div>
    <img src="https://i.ibb.co/4FmBVkz/maskan.png" height="200" width="250" style="position: relative; left:250px; bottom:30px" />

    <div class="relative2" style="clear:right; right: 220px;"><a id="houseInfLink" href="https://kilid.com/housing-market-insight">اطلاعات بازار مسکن</a></div>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <br /><br /><br /><br /><br />

    <h2 id="kilidmag" style="color:#B30753; text-align:center"></h2>
    <div style="text-align: center; color: #9395A5; font-size:11pt">
        <p style="display: inline-block;  width: 50%;">کارشناسان کیلید، در "کیلید مگ" شما را با مهم‌ترین مسائل بازار مسکن آشنا می‌کنند. کیلید مگ، مبتنی بر بررسی‌های علمی و آماری، اخبار و تحلیل‌های آینده بازار مسکن را در اختیارتان قرار می‌دهد</p>
    </div>

    <br />

    <div id="kilidmagPics" style="text-align: center;">
    </div>

    <div style="text-align:center; color: #939598; font-size:13pt;"><a id="houseInfLink" href="https://kilid.com/mag/">مطالب بیشتر</a></div>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <br /><br /><br />

    <div class="footer1">
        <div style="position:relative;bottom:40px;">
            <a id="changeImg1" href="https://www.linkedin.com/company/12904521/"><img src="https://i.ibb.co/ZxyDRnT/linkedin2.png" style="border-radius:40px; margin-right:10px;"></a>
            <a id="changeImg2" href="https://twitter.com/kilidcom"><img src="https://i.ibb.co/dMxh7Nc/twitter2.png" style="border-radius:40px; margin-right:10px;"></a>
            <a id="changeImg3" href="https://www.instagram.com/kilidcom"><img src="https://i.ibb.co/SJc1mcp/instagram2.png" style="border-radius:40px; margin-right:10px;"></a>
            <a id="changeImg4" href="https://t.me/kilidcom"><img src="https://i.ibb.co/k52jCZh/telegram2.png" style="border-radius:40px;"></a>
        </div>
        <table id="footerTable">
            <tr>
                <td><a id="footer1Link" href="https://kilid.com/pro"> سامانه مشاورین </a></td>
                <td><a id="footer1Link" href="https://kilid.com/real-estate-agencies"> آژانس های املاک </a></td>
                <td><a id="footer1Link" href="https://kilid.com/post-real-estate-listings/buy/step1?previewMode=false">
						ثبت رایگان آگهی </a></td>
                <td><a id="footer1Link" href="https://kilid.com/housing-market-insight"> اطلاعات بازار مسکن </a></td>
                <td><a id="footer1Link" href="https://kilid.com/smart-real-estate-valuations"> قیمت خانه شما </a></td>
                <td><a id="footer1Link" href="https://kilid.com/map?type=listing&smartSearch=true&locations=c_2301021576&sort=kilid,DESC">
						جستجو روی نقشه </a></td>
                <td><a id="footer1Link" href="https://kilid.com/rent"> رهن و اجاره </a></td>
                <td><a id="footer1Link" href="./buy.html"> خرید </a></td>
            </tr>
        </table>

        <div style="text-align: center;">
            <a href="https://ecunion.ir/verify/kilid.com?token=74661475ce2907902a49"><img id="footerImg" src="https://i.ibb.co/VTfSbWp/ecunion-logo.png"></a>
            <a href="https://trustseal.enamad.ir/?id=79253&Code=AlRNt2QdIoRwJcSTIead"><img id="footerImg" src="https://i.ibb.co/HFHYPjn/enamad-logo.png"></a>
            <a href="https://google.com"><img id="footerImg" src="https://i.ibb.co/Ht7cYpr/eanjoman-logo.jpg"></a>
            <a href="https://logo.samandehi.ir/Verify.aspx?id=104407&p=rfthobpdaodsaodsobpdjyoe"><img id="footerImg" src="https://i.ibb.co/bKBtntt/samandehi-logo.png"></a>
        </div>

        <table id="footerTable">
            <tr>
                <td><a id="footer12Link" href="https://kilid.com/sitemap"> نقشه سایت </a></td>
                <td><a id="footer12Link" href="https://kilid.com/app-page/kilid-portal"> اپلیکیشن موبایل </a></td>
                <td><a id="footer12Link" href="https://kilid.com/mag/"> بلاگ </a></td>
                <td><a id="footer12Link" href="https://kilid.com/contact"> تماس با ما </a></td>
                <td><a id="footer12Link" href="https://kilid.com/about"> درباره کیلید </a></td>
            </tr>
        </table>

        <div>
            <a href="./kilid.html"><img src="https://i.ibb.co/bBzqdgy/kilid-gray.png"></a>
        </div>

        <div style="position:relative; text-align:center">
            <p style="font-size:9pt; color: #838383">تهران، خیابان وزرا، کوچه نهم، پلاک 26</p>
            <a href="tel:+982175071000" style="font-size:9pt; color: #838383; text-decoration: none;">021-75071000</a>
        </div>
    </div>

    <div class="footer2">

        <div style="position:relative; float: right; padding-right:350px; padding-left:150px; z-index:2;">
            <p style="position:relative; text-align:right; font-size:9pt; top:34px;">خرید</p>
            <div style="position:relative; text-align:right; right:50px;">
                <div style="width:150px; display:inline-block;">
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-pasdaran">پاسداران</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-tehranpars">تهرانپارس</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-shahrak_qarb">شهرک غرب</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-punak">پونک</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-region2-satarkhan">ستارخان</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-bolvar_ferdos">بلوار فردوس</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-vanak">ونک</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-saadat_abad">سعادت آباد</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-marzdaran">مرزداران</a>
                    <a id="footer2Link" href="https://kilid.com/buy/tehran-region10-navab">نواب</a>
                </div>
            </div>
        </div>

        <div style="padding-right:350px; padding-left:150px">
            <p style="position:relative; text-align:right; font-size:9pt; top:34px;">اجاره</p>
            <div style="position:relative; text-align:right; right:50px">
                <div style="width:150px; display:inline-block;">
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-pasdaran">پاسداران</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-tehranpars">تهرانپارس</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-shahrak_qarb">شهرک غرب</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-punak">پونک</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-region2-satarkhan">ستارخان</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-bolvar_ferdos">بلوار فردوس</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-vanak">ونک</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-saadat_abad">سعادت آباد</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-marzdaran">مرزداران</a>
                    <a id="footer2Link" href="https://kilid.com/rent/tehran-region10-navab">نواب</a>
                </div>
            </div>
        </div>

    </div>

    <div class="footer3">
        <span><a id="footer2Link" href="https://kilid.com/terms">شرایط استفاده</a></span> &nbsp&nbsp
        <span><a id="footer2Link" href="https://kilid.com/policy">حریم خصوصی</a></span> &nbsp&nbsp
        <span style="text-align:center; opacity:0.6;">کلیه حقوق این سایت متعلق به شرکت کلان داده شهر فناوران
			می‌باشد</span>

    </div>

</body>

</html>