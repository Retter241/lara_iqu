<div class="col-md-3">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
      .sliderId {
          /* width: 500px; */
    margin: auto;
    text-align: center;
    position: relative;
    height: 65px;
      }
      .sliderId svg,
      .sliderId input[type=range] {
        position: absolute;
        left: 0;
        bottom: 0;
      }
      input[type=number] {
        border: 1px solid #ddd;
        text-align: center;
        -moz-appearance: textfield;
      }
      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
      }
      input[type=number]:invalid,
      input[type=number]:out-of-range {
        border: 2px solid #e60023;
      }
      input[type=range] {
        -webkit-appearance: none;
        width: 100%;
      }
      input[type=range]:focus {
        outline: none;
      }
      input[type=range]:focus::-webkit-slider-runnable-track {
        background: #1da1f2;
      }
      input[type=range]:focus::-ms-fill-lower {
        background: #1da1f2;
      }
      input[type=range]:focus::-ms-fill-upper {
        background: #1da1f2;
      }
      input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 5px;
        cursor: pointer;
        animate: 0.2s;
        background: #1da1f2;
        border-radius: 1px;
        box-shadow: none;
        border: 0;
      }
      input[type=range]::-webkit-slider-thumb {
        z-index: 2;
        position: relative;
        box-shadow: 0px 0px 0px #000;
        border: 1px solid #1da1f2;
        height: 18px;
        width: 18px;
        border-radius: 25px;
        background: #a1d0ff;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -7px;
      }
      input[type=range]::-moz-range-track {
        width: 100%;
        height: 5px;
        cursor: pointer;
        animate: 0.2s;
        background: #1da1f2;
        border-radius: 1px;
        box-shadow: none;
        border: 0;
      }
      input[type=range]::-moz-range-thumb {
        z-index: 2;
        position: relative;
        box-shadow: 0px 0px 0px #000;
        border: 1px solid #1da1f2;
        height: 18px;
        width: 18px;
        border-radius: 25px;
        background: #a1d0ff;
        cursor: pointer;
      }
      input[type=range]::-ms-track {
        width: 100%;
        height: 5px;
        cursor: pointer;
        animate: 0.2s;
        background: transparent;
        border-color: transparent;
        color: transparent;
      }
      input[type=range]::-ms-fill-lower,
      input[type=range]::-ms-fill-upper {
        background: #1da1f2;
        border-radius: 1px;
        box-shadow: none;
        border: 0;
      }
      input[type=range]::-ms-thumb {
        z-index: 2;
        position: relative;
        box-shadow: 0px 0px 0px #000;
        border: 1px solid #1da1f2;
        height: 18px;
        width: 18px;
        border-radius: 25px;
        background: #a1d0ff;
        cursor: pointer;
      }
    </style>
            <div class="card">
                <div class="card-header">
                    Filters
                </div>
                <div class="card-body">
    
  <form method="get" action="/shop" id="shop_filter_form">

  @include('filter')

  
      </form>

                </div>
            </div>
            <br/>
     
<script>
      (function() {

        function slidersRange (parents) {

       
        let parent = parents;
        if(!parent) return;
        let rangeSlide = parent.querySelectorAll("input[type=range]");
        let numberSlide = parent.querySelectorAll("input[type=number]");
        rangeSlide.forEach(function(el) {
          el.oninput = function() {
            let slide1 = parseFloat(rangeSlide[0].value);
            let slide2 = parseFloat(rangeSlide[1].value);
            if(slide1 > slide2) {
              [slide1, slide2] = [slide2, slide1];
            }
            numberSlide[0].value = slide1;
            numberSlide[1].value = slide2;
          }
        });
        numberSlide.forEach(function(el) {
          el.oninput = function() {
            let number1 = parseFloat(numberSlide[0].value);
            let number2 = parseFloat(numberSlide[1].value);
            if(number1 > number2) {
              let tmp = number1;
              numberSlide[0].value = number2;
              numberSlide[1].value = tmp;
            }
            rangeSlide[0].value = number1;
            rangeSlide[1].value = number2;
          }
        });


 };


 slidersRange(document.querySelector(".sliderId"));
  slidersRange(document.querySelector(".sliderIdWeight"));

      })();
    </script>

   </div>  
</div>
