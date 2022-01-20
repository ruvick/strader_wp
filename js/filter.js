const filterParamLoad = 'http://ruvick.site/wp-json/gensvet/v2/get_filter'




function getRequests() {
    var s1 = location.search.substring(1, location.search.length).split('&'),
        r = {}, s2, i;
    for (i = 0; i < s1.length; i += 1) {
        s2 = s1[i].split('=');
        let arrayIndex = decodeURIComponent(s2[0]).toLowerCase();
        if (arrayIndex.indexOf('[') == -1)
            {
                r[arrayIndex] = decodeURIComponent(s2[1]);
            } else {
                arrayIndex = arrayIndex.substring(0, arrayIndex.indexOf('['));
                if (typeof r[arrayIndex] === 'object')
                    r[arrayIndex].push(decodeURIComponent(s2[1]).replaceAll('+', ' '))
                else 
                    r[arrayIndex] = [decodeURIComponent(s2[1]).replaceAll('+', ' ')]
            }
    }
    return r;
};

document.addEventListener("DOMContentLoaded", () => {

   
    let qParam = getRequests();
    console.log(qParam);

    if (document.getElementById('tovarCategoryId') == null) return;
    
    let category = tovarCategoryId.dataset.id;
     
    const xhr = new XMLHttpRequest()

    xhr.open('GET', filterParamLoad+"?catid="+category)
    xhr.responseType='json'
    xhr.setRequestHeader('Content-Type', 'application/json')

    xhr.onload = () => {
        console.log(xhr.response);
        
        // Размер
        let sizeStr = ""
        xhr.response.offer_size.forEach((element, index) => {
            
            let checed = (qParam.sizecheck != undefined && qParam.sizecheck.includes(element) )?"checked":"";

            sizeStr += '<li class="lines-wrap-filter-card-features-list-item li_checbox">'+
							'<input id="size_'+index+'" name="sizecheck[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden="" '+checed+' value = "'+element+'" data-value="'+element+'">'+
							'<label for="size_'+index+'" class=" lines-wrap-filter-card-features-list-item__desc">'+element+'</label>'+
						'</li>'
        });
        sizeFilterList.innerHTML = sizeStr;

        // Световой эффект
        let dtypeStr = ""

        console.log(xhr.response.offer_light_effect);
            console.log(qParam.diodtype);
        xhr.response.offer_light_effect.forEach((element, index) => {
            
            

            let checed = (qParam.diodtype != undefined && qParam.diodtype.includes(element) )?"checked":"";

            dtypeStr += '<li class="lines-wrap-filter-card-features-list-item li_checbox">'+
							'<input id="dtype_'+index+'" name="diodtype[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden="" '+checed+' value = "'+element+'" data-value="'+element+'">'+
							'<label for="dtype_'+index+'" class=" lines-wrap-filter-card-features-list-item__desc">'+element+'</label>'+
						'</li>'
        });
        dtypeFilterList.innerHTML = dtypeStr;

        // Комплектация
        let onlyStarter = ""
        xhr.response.offer_driver.forEach((element, index) => {
            
            let checed = (qParam.drivercheck != undefined && qParam.drivercheck.includes(element) )?"checked":"";

            onlyStarter += '<li class="lines-wrap-filter-card-features-list-item li_checbox">'+
							'<input id="driver_'+index+'" name="drivercheck[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden="" '+checed+' value = "'+element+'" data-value="'+element+'">'+
							'<label for="driver_'+index+'" class=" lines-wrap-filter-card-features-list-item__desc">'+element+'</label>'+
						'</li>'
        });
        komplFilterList.innerHTML = onlyStarter;

        // Мощность
        let powerStr = ""
        xhr.response.offer_power.forEach((element, index) => {
            
            let checed = (qParam.power != undefined && qParam.power.includes(element) )?"checked":"";

            powerStr += '<input id="vt'+index+'" type="checkbox" value="'+element+'" name="power[]" '+checed+' >'+
                        '<label for="vt'+index+'" class="lines-wrap-filter-card-features__btn option">'+element+' Вт</label>'
        });

        powerFilterList.innerHTML = powerStr;

        // Световой поток
        let lightFlowStr = ""
        xhr.response.offer_light_flow.forEach((element, index) => {
            
            let checed = (qParam.lightflow != undefined && qParam.lightflow.includes(element) )?"checked":"";

            lightFlowStr += '<input id="lightflow_'+index+'" type="checkbox" value="'+element+'" name="lightflow[]" '+checed+' >'+
                        '<label for="lightflow_'+index+'" class="lines-wrap-filter-card-features__btn option">'+element+' Лм</label>'
        });

        lightflowFilterList.innerHTML = lightFlowStr;

        // Рассеиватель
        let diffuserStr = ""
        xhr.response.offer_diffuser.forEach((element, index) => {
            
            let checed = (qParam.rscheck != undefined && qParam.rscheck.includes(element) )?"checked":"";

            diffuserStr += '<li class="lines-wrap-filter-card-features-list-item">'+
                                '<input id = "ras_'+index+'" name="rscheck[]" value = "'+element+'" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" '+checed+' hidden data-value="'+element+'" >'+
                                '<label for = "ras_'+index+'" class="lines-wrap-filter-card-features-list-item__desc">'+element+'</label>'+
                            '</li>'
        });
        diffuserFilterList.innerHTML = diffuserStr;

        // Световая температура
        let colortypeStr = ""
        xhr.response.offer_colour_temp.forEach((element, index) => {
            
            let checed = (qParam.colortype != undefined && qParam.colortype.includes(element) )?"checked":"";

            colortypeStr += '<li class="lines-wrap-filter-card-features-list-item li_checbox">'+
							'<input id="color_'+index+'" name="colortype[]" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" hidden="" '+checed+' value = "'+element+'" data-value="'+element+'">'+
							'<label for="color_'+index+'" class=" lines-wrap-filter-card-features-list-item__desc">'+element+' K</label>'+
						'</li>'
        });
        colortypeFilterList.innerHTML = colortypeStr;

        // colortFrom.value = xhr.response.offer_colour_temp_min;
        // colortTo.value = xhr.response.offer_colour_temp_max;

        // serRangeSlider();

        dropdownInit(".dropdownAfterLoad");

        categoryFilterLoader.style.display = "none";
        categoryFilterForm.style.display = "block";
    }

    xhr.send();

});