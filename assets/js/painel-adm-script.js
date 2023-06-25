const menuItems = document.querySelectorAll('.menu-items')
const forms = document.querySelectorAll('.forms')

menuItems.forEach(menuItem => {
	menuItem.addEventListener('click', () => {
		const formId = menuItem.dataset.form
		const formToShow = document.getElementById(formId)

		forms.forEach(form => {
			if (form === formToShow) {
				form.classList.toggle('enable')
			} else {
				form.classList.remove('enable')
			}
		})
	})
})

const edits = document.querySelectorAll('.edit')
const editWrapper = document.querySelector('.edit-wrapper')
const closeRegisterWrapper = document.querySelector('.close-register-wrapper')
const wrapperEditButton = document.querySelector('#wrapper-edit-button')
const titleWrapperCliente = document.querySelector('.title-wrapper-cliente')
edits.forEach(edit => {
	edit.addEventListener('click', () => {
		const dataValue = edit.dataset.value
		wrapperEditButton.setAttribute('value', dataValue)
		if (edit.dataset.verify === 'admin') {
			wrapperEditButton.setAttribute('name', 'editAdmin')
			editWrapper.setAttribute('action', '../../../server/admin/setAdmin.php')
			titleWrapperCliente.textContent = 'Editar ADM'
			wrapperEditButton.textContent = 'Editar ADM'
			
		} else if (edit.dataset.verify === 'user') {
			wrapperEditButton.setAttribute('name', 'editCliente')
			editWrapper.setAttribute('action', '../../../server/cliente/setCliente.php')
			wrapperEditButton.textContent = 'Editar Cliente'
			titleWrapperCliente.textContent = 'Editar Cliente'
		}
		editWrapper.style.display = "flex"
	})
})

const adminRegisterButton = document.querySelector('.admin-register-button')
adminRegisterButton.addEventListener('click', () => {
	editWrapper.setAttribute('action', '../../../server/admin/setAdmin.php')
	wrapperEditButton.textContent = 'Registar ADM'
	titleWrapperCliente.textContent = 'Registar ADM'
	wrapperEditButton.setAttribute('name', 'createAdmin')
	editWrapper.style.display = "flex"
})

closeRegisterWrapper.addEventListener('click', () => {
	editWrapper.style.display = "none"
	wrapperEditButton.setAttribute('value', '')
	wrapperEditButton.setAttribute('name', '')
	editWrapper.reset()
})


// API ViaCEP
const cep = document.querySelector('#cep')
cep.addEventListener('change', () => {

	cep.value = cep.value.replace(/-/g, '')
	const url = `https://viacep.com.br/ws/${cep.value}/json/`
	fetch(url).then(async response => {
		if (response.ok) {
			await response.json().then(data => {
				if (data.logradouro != undefined) {
					const rua = document.querySelector('#rua')
					const bairro = document.querySelector('#bairro')
					const cidade = document.querySelector('#cidade')
					const uf = document.querySelector('#uf')

					rua.value = data.logradouro
					bairro.value = data.bairro
					cidade.value = data.localidade
					uf.value = data.uf

					rua.readOnly = true
					bairro.readOnly = true
					cidade.readOnly = true
					uf.readOnly = true
				} else {
					cep.value = "CEP não encontrado."
				}
			})
		}
	})
})