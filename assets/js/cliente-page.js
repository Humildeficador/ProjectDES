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
	})/* .catch(() => {
		cep.value = "CEP não encontrado."
	}) */
})

const registerButton = document.querySelector('.register-button')
const loginButton = document.querySelector('.login-button')
const loginWrapper = document.querySelector('.login-wrapper')
const registerWrapper = document.querySelector('.register-wrapper')

registerButton.addEventListener('click', () => {
	loginWrapper.classList.remove('enable')
	registerWrapper.classList.add('enable')
})

loginButton.addEventListener('click', () => {
	registerWrapper.classList.remove('enable')
	loginWrapper.classList.add('enable')
})