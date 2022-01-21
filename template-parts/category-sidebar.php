<div class="catalog-sec__sidebar">
        <h6 class="catalog-sec__sidebar-title">Фильтр по параметрам</h6>
        
        <div class = "loaderSize" id = "categoryFilterLoader">Загрузка...</div>	

        <form action="#" class="catalog-sec__sidebar-form" id = "categoryFilterForm">

          <div class="catalog-sec__sidebar-form-column">
            <div class="spollers-block" data-spollers data-one-spoller>
              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Цена</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
                  <div class="catalog-sec__sidebar-price">
                    <div class="catalog-sec__sidebar-price-input">
                      <label for="min-price" class="form__label">От</label>
                      <input id="min-price" autocomplete="off" type="text" id = "priceOt" name="priceOt" data-error="Ошибка" data-value="25"
                      class="input _digital">
                    </div>
                    <div class="catalog-sec__sidebar-price-input">
                      <label for="max-price" class="form__label">До</label>
                      <input id="max-price" autocomplete="off" type="text" id = "priceDo" name="priceDo" data-error="Ошибка" data-value="15000"
                      class="input _digital">
                    </div>
                  </div>
                </div>
              </div>

              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Бренд</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body" id = "filterBrandWrapper">
                  
                  <label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
                    <span class="checkbox__text"><span>Alice</span></span>
                  </label>


                </div>
              </div>

              <div class="catalog-sec__sidebar-availab">
                <label for="check8" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                  <input id="check8" data-error="Ошибка" class="checkbox__input" type="checkbox" value="9" name="form[]">
                  <span class="checkbox__text"><span>В наличии</span></span>
                </label>
              </div>

              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Страна производитель</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body" id = "filterStranaWrapper">
                  
                  <label for="check9" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check9" data-error="Ошибка" class="checkbox__input" type="checkbox" value="10" name="form[]">
                    <span class="checkbox__text"><span>Франция</span></span>
                  </label>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="catalog-sec__sidebar-form-btn">
            <button type="reset" class="catalog-sec__sidebar-form-btn-limk button button_grey">Сбросить</button>
            <button type="submit" class="catalog-sec__sidebar-form-btn-limk button button_red">Показать</button>
          </div>
        </form>
      </div>