function accotdding() {
  var acc = document.getElementsByClassName("btn__accordion");
  var i;

  if (acc != " ") {
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("btn__accordion--active");
        var panel = this.nextElementSibling;

        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  }
}

accotdding();
;

(function ($) {
  $.fn.unveil = function (threshold, callback) {
    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina ? "data-src-retina" : "data-src",
        images = this,
        loaded;
    this.one("unveil", function () {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");

      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function () {
        var $e = $(this);
        if ($e.is(":hidden")) return;
        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();
        return eb >= wt - th && et <= wb + th;
      });
      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }

    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);
    unveil();
    return this;
  };
})(window.jQuery || window.Zepto);

function initMap() {
  var myLatLng = {
    lat: 52.1733916,
    lng: 21.0811614
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 17,
    styles: [{
      "featureType": "all",
      "elementType": "labels.text.fill",
      "stylers": [{
        "saturation": 36
      }, {
        "color": "#000000"
      }, {
        "lightness": 40
      }]
    }, {
      "featureType": "all",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "visibility": "on"
      }, {
        "color": "#000000"
      }, {
        "lightness": 16
      }]
    }, {
      "featureType": "all",
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "administrative",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 20
      }]
    }, {
      "featureType": "administrative",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 17
      }, {
        "weight": 1.2
      }]
    }, {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 20
      }]
    }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 21
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 17
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 29
      }, {
        "weight": 0.2
      }]
    }, {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 18
      }]
    }, {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 16
      }]
    }, {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 19
      }]
    }, {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{
        "color": "#000000"
      }, {
        "lightness": 17
      }]
    }]
  });
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Zmora Tattoo'
  });
}

function form() {
  forms = document.getElementById('form');

  if (forms != null) {
    form = document.querySelectorAll(".wpcf7-form");
    text = forms.querySelectorAll("input[type=text]");
    check = forms.querySelectorAll("input[type=checkbox]");
    file = forms.querySelectorAll("input[type=file]");
    submit = forms.querySelectorAll("input[type=submit]");
    email = forms.querySelectorAll("input[type=email]");
    radio = forms.querySelectorAll("input[type=radio]");
    tel = forms.querySelectorAll("input[type=tel]");
    textarea = forms.querySelectorAll("textarea");
    select = forms.querySelectorAll("select");
    option = forms.querySelectorAll("option");

    if (form != " ") {
      for (i = 0; i < form.length; i++) {
        form[i].classList.add('form');
      }
    }

    if (text != " ") {
      for (i = 0; i < text.length; i++) {
        text[i].classList.add('form__input');
      }
    }

    if (check != " ") {
      for (i = 0; i < check.length; i++) {
        check[i].classList.add('form__checkbox');
      }
    }

    if (radio != " ") {
      for (i = 0; i < radio.length; i++) {
        radio[i].classList.add('form__checkbox');
      }
    }

    if (textarea != " ") {
      for (i = 0; i < textarea.length; i++) {
        textarea[i].classList.add('form__text');
      }
    }

    if (select != " ") {
      for (i = 0; i < select.length; i++) {
        select[i].classList.add('form__select');
      }
    }

    if (option != " ") {
      for (i = 0; i < option.length; i++) {
        option[i].classList.add('form__option');
      }
    }

    if (file != " ") {
      for (i = 0; i < file.length; i++) {
        file[i].classList.add('form__file');
      }
    }

    if (email != " ") {
      for (i = 0; i < email.length; i++) {
        email[i].classList.add('form__input');
      }
    }

    if (tel != " ") {
      for (i = 0; i < tel.length; i++) {
        tel[i].classList.add('form__input');
      }
    }

    if (submit != " ") {
      for (i = 0; i < submit.length; i++) {
        submit[i].classList.add('form__submit');
      }
    }
  }
}

form();

window.onload = function () {
  (function () {
    if (typeof NodeList.prototype.forEach === "function") return false;
    NodeList.prototype.forEach = Array.prototype.forEach;
  })();

  (function () {
    if (typeof String.prototype.padStart === "function") return false;

    String.prototype.padStart = function padStart(length, value) {
      var res = String(this);

      if (length >= value.length + this.length) {
        for (var i = 0; i <= length - (value.length + this.length); i++) {
          res = value + res;
        }
      }

      return res;
    };
  })();

  var datePickerTpl = '<div class="yearMonth"><a class="previous">&lsaquo;</a><span class="year">{y}</span>-<span class="month">{m}</span><a class="next">&rsaquo;</a></div><div class="days"><a>1</a><a>2</a><a>3</a><a>4</a><a>5</a><a>6</a><a>7</a><a>8</a><a>9</a><a>10</a><a>11</a><a>12</a><a>13</a><a>14</a><a>15</a><a>16</a><a>17</a><a>18</a><a>19</a><a>20</a><a>21</a><a>22</a><a>23</a><a>24</a><a>25</a><a>26</a><a>27</a><a>28</a><a>29</a><a>30</a><a>31</a>';

  function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
  }

  function hideInvalidDays(dp, month, year) {
    dp.querySelectorAll(".days a").forEach(function (a) {
      a.style.display = "inline-block";
    });
    var days = daysInMonth(month, year);
    var invalidCount = 31 - days;

    if (invalidCount > 0) {
      for (var j = 1; j <= invalidCount; j++) {
        dp.querySelector(".days a:nth-last-child(" + j + ")").style.display = "none";
      }
    }
  }

  function clearSelected(dp) {
    dp.querySelectorAll(".days a.selected").forEach(function (e) {
      e.classList.remove("selected");
    });
  }

  function setMonthYear(dp, month, year, input) {
    dp.querySelector(".month").textContent = String(month).padStart(2, "0");
    dp.querySelector(".year").textContent = year;
    clearSelected(dp);
    hideInvalidDays(dp, month, year);

    if (input && input.value) {
      var date = input.value.split("-");
      var curYear = parseInt(dp.querySelector(".year").textContent),
          curMonth = parseInt(dp.querySelector(".month").textContent);

      if (date[0] == curYear && date[1] == curMonth) {
        dp.querySelector(".days a:nth-child(" + parseInt(date[2]) + ")").className = "selected";
      }
    }
  }

  document.querySelectorAll(".datepicker").forEach(function (input) {
    input.setAttribute("readonly", "true");
    var dp = document.createElement("div");
    dp.className = "contextmenu";
    dp.style.left = input.offsetLeft + "px";
    dp.style.top = input.offsetTop + input.offsetHeight + "px";
    var now = new Date();
    dp.insertAdjacentHTML('beforeEnd', datePickerTpl.replace("{m}", String(now.getMonth() + 1).padStart(2, "0")).replace("{y}", now.getFullYear()));
    hideInvalidDays(dp, now.getMonth() + 1, now.getFullYear());
    dp.querySelector("a.previous").addEventListener("click", function (e) {
      var curYear = parseInt(dp.querySelector(".year").textContent),
          curMonth = parseInt(dp.querySelector(".month").textContent);
      var firstMonth = curMonth - 1 == 0;
      setMonthYear(dp, firstMonth ? 12 : curMonth - 1, firstMonth ? curYear - 1 : curYear, input);
    });
    dp.querySelector("a.next").addEventListener("click", function (e) {
      var curYear = parseInt(dp.querySelector(".year").textContent),
          curMonth = parseInt(dp.querySelector(".month").textContent);
      var lastMonth = curMonth + 1 == 13;
      setMonthYear(dp, lastMonth ? 1 : curMonth + 1, lastMonth ? curYear + 1 : curYear, input);
    });
    dp.querySelectorAll(".days a").forEach(function (a) {
      a.addEventListener("click", function (e) {
        clearSelected(dp);
        e.target.className = "selected";
        input.value = dp.querySelector(".year").textContent + "-" + dp.querySelector(".month").textContent + "-" + this.text.padStart(2, "0");
      });
    });
    input.parentNode.insertBefore(dp, input.nextSibling);
    input.addEventListener("focus", function () {
      if (input.value) {
        var date = input.value.split("-");
        setMonthYear(dp, date[1], date[0]);
        dp.querySelector(".days a:nth-child(" + parseInt(date[2]) + ")").className = "selected";
      }
    });
  });
};

function close() {
  $('.navbar__collpase').toggleClass('fadeOutRight');
  setTimeout(function () {
    $('.navbar__collpase').toggleClass('navbar__collpase--active animated fadeOutRight fadeInRight');
  }, 900);
}

jQuery(document).ready(function ($) {
  document.addEventListener("DOMContentLoaded", function () {
    $('#dys span:eq(0) input').click(function () {
      if (this.checked) {
        $('#form-date').css("display", "none");
        $('#form-days').css("display", "none");
      }
    });
    $('#dys span:eq(2) input').click(function () {
      console.log('ok');

      if (this.checked) {
        $('#form-date').css("display", "flex");
        $('#form-days').css("display", "none");
      }
    });
    $('#dys span:eq(4) input').click(function () {
      if (this.checked) {
        $('#form-date').css("display", "none");
        $('#form-days').css("display", "flex");
      }
    });
    $('#dys span:eq(4) input').click(function () {
      if (this.checked) {
        $('#form-date').css("display", "none");
        $('#form-days').css("display", "flex");
      }
    });
    $('#yers .last input[type=radio]').click(function () {
      if (this.checked) {
        $('#form-no').css("display", "flex");
      }
    });
    $('.form__file').on("change", function () {
      if (this.files && this.files[0]) {
        this.classList.add('form__file--ok');
      }
    });
    $('.btn__toggle').click(function () {
      $('.navbar__collpase').toggleClass('navbar__collpase--active animated fadeInRight');
    });
    $('.btn__close').click(function () {
      close();
    });
    $('.btn__menu').click(function () {
      close();
    });
  });
  $('.quest__panel p').addClass('text text__margin--rev');
  $('.school__offer p').addClass('text text__margin--b');
  $(".l-img").unveil(-100, function () {
    $(this).load(function () {
      this.style.opacity = 1;
    });
  });
});
//# sourceMappingURL=blocks.build.js.map
