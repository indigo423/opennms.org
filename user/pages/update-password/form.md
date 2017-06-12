---
title: 'Update LDAP Password'
form:
    name: update-password-form
    fields:
        - name: username
          label: Username
          placeholder: Username
          autofocus: 'on'
          autocomplete: 'off'
          type: text
          validate:
            required: true

        - name: currentpassword
          label: 'Current Password'
          placeholder: 'Enter your current password'
          type: password
          validate:
            required: true

        - name: newpassword
          label: 'New Password'
          placeholder: 'Enter your new password'
          type: password
          validate:
            required: true

        - name: verifypassword
          label: 'Verify Password'
          placeholder: 'Verify your new password'
          type: password
          validate:
            required: true

        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          recaptcha_site_key: 6Le7pCMUAAAAAN2390vTvHQu91J9am7SaJSCn6Uh
          recaptcha_not_validated: 'Captcha not valid!'
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset
    process:
        - captcha:
            recaptcha_secret: 6Le7pCMUAAAAAADwG9uIr3b8ikY281WfuKJM0Q5X

        - updateLdapPassword:
            username: form.value.username
            currentpassword: form.value.currentpassword
            newpassword: form.value.newpassword
            verifypassword: form.value.verifypassword

---

# Update Password

Use this page to change your OpenNMS password
