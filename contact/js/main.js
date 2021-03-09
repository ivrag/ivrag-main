const contactFormWrapper = document.getElementById('contact-form-wrapper');
const contactForm = document.getElementById('contact-form');
const contactFormTitle = document.getElementById('customer-title');
const contactFormName = document.getElementById('customer-name');
const contactFormCompany = document.getElementById('customer-company');
const contactFormAddress = document.getElementById('customer-address');
const contactFormCity = document.getElementById('customer-city');
const contactFormEmail = document.getElementById('customer-email');
const contactFormPhone = document.getElementById('customer-phone');
const contactFormMessage = document.getElementById('customer-message');
const contactFormPrivacy = document.getElementById('privacy-checkbox');
const contactFormSubmitButton = document.getElementById('form-submit-button');
const sendSuccess = document.querySelector('.send-success');
const sendError = document.querySelector('.send-error');

function contactFormSubmit(e) {
    e.preventDefault();

    contactFormSubmitButton.disabled = true;
    contactFormSubmitButton.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> lädt...`;

    let invalidEmailFeedback = document.getElementById('invalid-email-feedback');
    invalidEmailFeedback.textContent = '';

    contactFormName.classList.remove('is-invalid');
    contactFormEmail.classList.remove('is-invalid');
    contactFormPhone.classList.remove('is-invalid');
    contactFormMessage.classList.remove('is-invalid');
    contactFormPrivacy.classList.remove('is-invalid');

    let customerTitle = contactFormTitle.value;
    let customerName = contactFormName.value;
    let customerCompany = contactFormCompany.value;
    let customerAddress = contactFormAddress.value;
    let customerCity = contactFormCity.value;
    let customerEmail = contactFormEmail.value;
    let customerPhone = contactFormPhone.value;
    let customerMessage = contactFormMessage.value;
    let privacyCheckbox = contactFormPrivacy.checked;

    let data = {
        title: customerTitle,
        name: customerName,
        company: customerCompany,
        address: customerAddress,
        city: customerCity,
        email: customerEmail,
        phone: customerPhone,
        message: customerMessage,
        privacy: privacyCheckbox
    }

    let x = new xhr();
    x.post("POST", "./includes/send_contact.php", (rsp) => {
        let re;
        try {
            re = JSON.parse(rsp);
        } catch(e) {
            re = null;
            return false;
        }
        if (re.status === true) {
            contactFormSubmitButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill="#ffffff" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>';
            contactFormWrapper.style.display = 'none';
            sendSuccess.style.display = 'block';
            contactForm.reset();
        } else {
            contactFormSubmitButton.disabled = false;
            contactFormSubmitButton.innerHTML = 'Senden!';
            if (re.error === 'empty') {
                if (re.fields.includes('name')) {
                    contactFormName.classList.add('is-invalid');
                }
                if (re.fields.includes('email')) {
                    contactFormEmail.classList.add('is-invalid');
                }
                if (re.fields.includes('phone')) {
                    contactFormPhone.classList.add('is-invalid');
                }
                if (re.fields.includes('message')) {
                    contactFormMessage.classList.add('is-invalid');
                }
            }
            if (re.error === 'email') {
                invalidEmailFeedback.textContent = 'Ihre E-Mail scheint nicht echt zu sein.';
                contactFormEmail.classList.add('is-invalid');
            }
            if (re.error === 'privacy') {
                contactFormPrivacy.classList.add('is-invalid');
            }
            if (re.error === 'emailInternal') {
                contactFormWrapper.style.display = 'none';
                sendError.style.display = 'block';
                contactForm.reset();
            }
        }
    }, data);
}

contactForm.addEventListener('submit', contactFormSubmit, false);