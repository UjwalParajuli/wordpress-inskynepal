window.addEventListener('load', () => {
    let currentPos = 0;

    const fullForm = document.querySelector('.booking-form');

    const tabControls = document.querySelectorAll('.booking-position button');
    const nextButtons = document.querySelectorAll('#booking-page .next');
    const prevButtons = document.querySelectorAll('#booking-page .prev');

    const basicForm = document.querySelectorAll('.booking-basic input');
    const basicDisplay = document.querySelectorAll('.conf-basic span');

    const diverFormGroup = document.querySelector('.diver-display-single');

    const diverCountInput = document.querySelector('#no-of-divers');
    const formGroup = document.querySelector('.diver-form');

    const submitBtn = fullForm.querySelector('input[type="submit"]');

    let formLink = fullForm.getAttribute('action');

    fullForm.removeAttribute('action');

    tabControls.forEach(tabControl => {
        tabControl.addEventListener('click', e => {
            e.preventDefault();

            let switchTo = tabControl.getAttribute('data-switch');

            currentPos = switchTab(currentPos, switchTo);
        });
    }); 

    nextButtons.forEach(nextBtn => {
        nextBtn.addEventListener('click', e => {
            e.preventDefault();

            let currentForm = document.querySelector('.booking-tab.active');
            let currentNav = currentForm.querySelector('.form-nav');
            let currentFormInputs = document.querySelectorAll('.booking-tab.active input');
            let isEmpty = false;

            for(let i = 0; i < currentFormInputs.length; i++){
                if(currentFormInputs[i].value === '' && currentFormInputs[i].hasAttribute('required')){
                    let message = document.createElement('span');
                    message.className = 'error';
                    message.innerText = 'Looks like you left some fields empty!'

                    currentForm.insertBefore(message, currentNav);
                    isEmpty = true;
                    break;
                }
            }

            if(!isEmpty) {
                let switchTo = parseInt(currentPos) + 1;

                currentPos = switchTab(currentPos, switchTo);
            }            
        });
    }); 

    prevButtons.forEach(prevBtn => {
        prevBtn.addEventListener('click', e => {
            e.preventDefault();

            let switchTo = currentPos - 1;

            currentPos = switchTab(currentPos, switchTo);
        });
    }); 

    diverCountInput.addEventListener('input', e => {
        e.preventDefault();

        updateDivers(diverCountInput.value, formGroup, diverFormGroup);
    });

    document.addEventListener('keypress', (e) => {

        if (e.key == "Enter") {
            
            let formsCount = document.querySelectorAll('.booking-tab').length;
            
            if(currentPos !== (formsCount - 1)) {
                console.log('not avail');

                e.preventDefault();

                let switchTo = parseInt(currentPos) + 1;

                currentPos = switchTab(currentPos, switchTo);

                //alert('enter key pressed');
            }            
        }
    });

    //Display form values

    for(let i = 0; i < basicForm.length; i++) {        
        basicForm[i].addEventListener('input', () => {
            basicDisplay[i].innerText = basicForm[i].value;
        });
    }

    fullForm.addEventListener('submit', (e) => {
        e.preventDefault();

        submitFormAjax(fullForm, formLink);
    });
});

function switchTab(currentPos, switchTo) {
    const tabs = document.querySelectorAll('.booking-tab');

    if(switchTo >= tabs.length || switchTo < 0) return currentPos;
    
    tabs[currentPos].classList.remove('active');
    tabs[switchTo].classList.add('active');

    changeActive(currentPos, switchTo);

    return switchTo;
}

function changeActive(currentPos, switchTo) {
    const tabControls = document.querySelectorAll('.booking-position button');

    tabControls[currentPos].classList.remove('active');
    tabControls[switchTo].classList.add('active');
}

function updateDivers(noOfDivers, form, diverForm) {
    
    const newFormGroup = document.querySelectorAll('.diver-form');
    const noOfForms = newFormGroup.length;
    let lastCount = newFormGroup[noOfForms - 1].querySelector('span').innerText;

    if(noOfDivers > noOfForms) {
        let difference = noOfDivers - noOfForms;     

        for(i = 0; i < difference; i++) {
            let newForm = form.cloneNode(true);
            let newDiverForm = diverForm.cloneNode(true);

            let nav = form.querySelector('.form-nav');

            lastCount = (parseInt(lastCount) + 1);

            newForm.querySelector('span').innerText 
            = '' + lastCount;

            newDiverForm.querySelector('.disp-count').innerText = '' + lastCount;

            form.insertBefore(newForm, nav);
            insertAfter(newDiverForm, diverForm);

            
        }
    } else if(noOfDivers < noOfForms) {

        for(i = noOfDivers; i < noOfForms; i++) {
            newFormGroup[i].remove();
        }

    }

    diverInputUpdate();
}

function submitFormAjax(form, action) {
    let xmlhttp= window.XMLHttpRequest ?
        new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            form.style.display = 'none';
            document.querySelector('.booking-final').classList.remove('d-none');
        }
    }

    //var formData = serialize(form);

    let formData = new FormData(form);

    xmlhttp.open("POST", action, true);
    //xmlhttp.setRequestHeader("Content-type","multipart/form-data");
    xmlhttp.send(formData);
}

function serialize(form) {

	// Setup our serialized data
	var serialized = [];

	// Loop through each field in the form
	for (var i = 0; i < form.elements.length; i++) {

		var field = form.elements[i];

		// Don't serialize fields without a name, submits, buttons, file and reset inputs, and disabled fields
		if (!field.name || field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') continue;

		// If a multi-select, get all selections
		if (field.type === 'select-multiple') {
			for (var n = 0; n < field.options.length; n++) {
				if (!field.options[n].selected) continue;
				serialized.push(encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[n].value));
			}
		}

		// Convert field data to a query string
		else if ((field.type !== 'checkbox' && field.type !== 'radio') || field.checked) {
			serialized.push(encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value));
		}
	}

	return serialized.join('&');

};

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function diverInputUpdate() {

    const diverForm = document.querySelectorAll('.booking-divers input:not(.diver-air-ticket), .booking-divers select');
    const diverDisplay = document.querySelectorAll('.conf-divers span:not(.disp-count)');    

    const imgInputs = document.querySelectorAll('.diver-air-ticket');
    const imgDisplays = document.querySelectorAll('.booking-air-ticket');

    for(let i = 0; i < diverForm.length; i++) {        
        diverForm[i].addEventListener('input', () => {
            diverDisplay[i].innerText = diverForm[i].value;
        });
    }

    for(let i = 0; i < imgInputs.length; i++) {        
        imgInputs[i].addEventListener('change', (e) => {
            //imgDisplays[i].innerText = imgInputs[i].value;
            preview_image(e, imgDisplays[i]);
        });
    }
}

function preview_image(event, placeHolder) 
{
    var reader = new FileReader();
    reader.onload = function()
    {
        placeHolder.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}