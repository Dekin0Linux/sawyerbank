
//switch transfer accounts
let cc_btn = document.getElementById('ccBtn')
let bankBtn = document.getElementById('bankBtn')

let ccDiv = document.getElementById('cc_div')
let bankDiv = document.getElementById('div_bank')

bankBtn.addEventListener('click',function(){
    ccDiv.classList.remove('d-block')
    ccDiv.classList.add('d-none')
    bankDiv.classList.remove('d-none')
    bankDiv.classList.remove('d-block')
})

cc_btn.addEventListener('click',function(){
    bankDiv.classList.remove('d-block')
    bankDiv.classList.add('d-none')

    ccDiv.classList.remove('d-none')
    ccDiv.classList.add('d-block')
})