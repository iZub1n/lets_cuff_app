$(document).ready(function(){
    $( ".drag" ).draggable({
        containment: "parent"
    });

    window.addEventListener( 'keypress', (function() {
        var strToType = 'iwantswords',
            strTyped = '';
        return function( event ) {
            var character = String.fromCharCode(event.which);
            strTyped += character;
            if (strToType.indexOf(strTyped) === -1) strTyped = '';
            else if (strTyped === strToType) {
                strTyped = '';
                $(".sword").show();

            }
        };
    }()) );
    $('#gender_button').click(function(){
        $(".gendered").toggle();
        $(".mb").toggle();
    });
    class ImageSwitcher {
        constructor(choices, i) {
            i = 0;
            this.Next = function () {
                hide_current_image();
                show_next_image();
            };
            var hide_current_image = function () {
                if (choices) {
                    choices[i].style.visibility = "hidden";
                    i += 1;
                }
            };
            var show_next_image = function () {
                if (choices) {
                    if (i == (choices.length)) {
                        i = 0;
                    }
                    choices[i].style.visibility = "visible";
                }
            };
        }
    }
    var eyes = $(".eyes");
    var nose = $(".nose");
    var mouth = $(".mouth");
    var hair_male = $(".hair_male");
    var hair_female = $(".hair_female");
    var top_male = $(".top_male");
    var top_female = $(".top_female");
    var bottom_male = $(".bottom_male");
    var bottom_female = $(".bottom_female");
    var shoes_male = $(".shoes_male");
    var shoes_female = $(".shoes_female");

    var eye_picker = new ImageSwitcher(eyes);
    document.getElementById("eyes_button").onclick = function() { eye_picker.Next(); };
    
    var nose_picker = new ImageSwitcher(nose);
    document.getElementById("nose_button").onclick = function() { nose_picker.Next(); };
    
    var mouth_picker = new ImageSwitcher(mouth);
    document.getElementById("mouth_button").onclick = function() { mouth_picker.Next(); };

    var m_shoe_picker = new ImageSwitcher(shoes_male);
    var f_shoe_picker = new ImageSwitcher(shoes_female);
    document.getElementById("shoes_button").onclick = function() { m_shoe_picker.Next(); f_shoe_picker.Next(); }

    var m_hair_picker = new ImageSwitcher(hair_male);
    var f_hair_picker = new ImageSwitcher(hair_female);
    document.getElementById("hair_button").onclick = function() { f_hair_picker.Next(); m_hair_picker.Next(); };
    
    var m_top_picker = new ImageSwitcher(top_male);
    var f_top_picker = new ImageSwitcher(top_female);
    document.getElementById("top_button").onclick = function() { m_top_picker.Next(); f_top_picker.Next(); };

    var m_bottom_picker = new ImageSwitcher(bottom_male);
    var f_bottom_picker = new ImageSwitcher(bottom_female);
    document.getElementById("bottom_button").onclick = function() { m_bottom_picker.Next(); f_bottom_picker.Next(); }
    });

