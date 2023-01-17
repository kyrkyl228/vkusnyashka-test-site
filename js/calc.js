$(document).ready ( function(){
    for(let i=0; i<localStorage.length; i++) {
        let id = localStorage.key(i);
        try{
            if(localStorage.getItem(id) > 0){
                document.getElementById('buy__buttonWrapper' + id).innerHTML = `
                <div class="buy__buttonNew" id="buy__buttonNew">
                    <button class="minus" onclick="minus('${id}')">-</button>
                    <p class="buy__amount" id="buy__amount${id}">${localStorage.getItem(id)}</p>
                    <button class="plus" onclick="plus('${id}')">+</button>
                </div>   
                `;  
            }            
        }catch{

        }
    }
});

function checkExceptions(id){
    if(Number(localStorage.getItem(id)) < 0){
        localStorage.removeItem(id);
    };    
};

function plus(id){
    checkExceptions(id);
    document.getElementById('buy__buttonWrapper' + id).innerHTML = `
    <div class="buy__buttonNew" id="buy__buttonNew">
        <button class="minus" onclick="minus('${id}')">-</button>
        <p class="buy__amount" id="buy__amount${id}">0</p>
        <button class="plus" onclick="plus('${id}')">+</button>
    </div>   
    `;
    let number = Number(localStorage.getItem(id)) + 1;
    localStorage.setItem(id, number);
    document.getElementById('buy__amount' + id).innerHTML =`${localStorage.getItem(id)}`;
};

function minus(id){
    checkExceptions(id);
    let number = Number(localStorage.getItem(id)) - 1;
    localStorage.setItem(id, number);
    document.getElementById('buy__amount' + id).innerHTML =`${localStorage.getItem(id)}`;
    if(Number(localStorage.getItem(id)) < 1){
        document.getElementById('buy__buttonWrapper' + id).innerHTML = `
        <div class="buy__buttonWrapper">
            <button class="buy__button" id="buy__button" onclick="plus('${id}')">
                Купить
            </button>                              
        </div>`;
    }    
}