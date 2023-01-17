$(document).ready ( function(){

    $('#herring').click(function(){         // вешаем основной обработчик на родителя
        document.getElementById('herringWrapper').style.display = 'none';               
    }).children().click(function(e){        // вешаем на потомков
        e.stopPropagation();   // предотвращаем всплытие
    });

    $('.wrapperWrapper').click(function(){         // вешаем основной обработчик на родителя
        document.getElementById('herringWrapper').style.display = 'none';               
    }).children().click(function(e){        // вешаем на потомков
        e.stopPropagation();   // предотвращаем всплытие
    });

    $("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "../PHP/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});


});

function back(){
    document.getElementById('herringWrapper').style.display = 'none';
}


function checkExceptions(id){
    if(Number(localStorage.getItem(id)) < 0){
        localStorage.removeItem(id);
    };    
};

function calculation(id, price){
    return price * Number(localStorage.getItem(id))
}

function totalChange(total){
    document.getElementById("totalPrice__inner").innerHTML = total;
}

function minus(id, price){
    checkExceptions(id);
    if(Number(localStorage.getItem(id)) > 0){
        let number = Number(localStorage.getItem(id)) - 1;
        localStorage.setItem(id, number);
        document.getElementById("mainWrapper__mainValue" + id).innerHTML = localStorage.getItem(id);
        document.getElementById("mainWrapper__cost" + id).innerHTML = calculation(id, price);

        total = + total - Number(price);
        totalChange(total);

        if(Number(localStorage.getItem(id)) <= 0){
            document.getElementById("list" + id).style.display = 'none';
            localStorage.removeItem(id);
        }
    }
}

function plus(id, price){
    let number = Number(localStorage.getItem(id)) + 1;
    localStorage.setItem(id, number);
    document.getElementById("mainWrapper__mainValue" + id).innerHTML = localStorage.getItem(id);
    document.getElementById("mainWrapper__cost" + id).innerHTML = calculation(id, price);
    total = + total + Number(price);
    console.log(total);
    totalChange(total);
}

function arranged(){
    let a = 0;
    for(let i=0; i<localStorage.length; i++) {
         a = Number(localStorage.getItem(localStorage.key(i)));
    }
    if(a > 0){
        document.getElementById('herringWrapper').style.display = 'flex';

        let txtLoop = [];
        for(let i=0; i<localStorage.length; i++) {
            let a = [localStorage.key(i), localStorage.getItem(localStorage.key(i))];
            txtLoop[i] = a
        }

        const txt = JSON.stringify(txtLoop);

        $.ajax({
            url: '../PHP/TotalInner.php',
            type: 'POST',
            data: 'txt='+ txt,
            success: function(data){
                total = data;
                document.getElementById('arranged__buttonWrapper').innerHTML = `
                    <button class="backButton" id="backButton" onclick="back()">
                        Вернуться
                    </button>  
                    <a id="arranged__button" onclick="ipayCheckout({
                        amount: ${total},
                        currency:'RUB',
                        order_number:'',
                        description: 'А. С. Пушкин. Избранное (подарочное издание)'},
                        function(order) { showSuccessfulPurchase(order) },
                        function(order) { showFailurefulPurchase(order) })"
                        
                        class=" arranged__button btn btn-xs btn-outline btn-primary">Купить
                    </a>
                `

            },
            error: function(){
            console.log('ERROR');
            }
        })
        
    }   


}


function showSuccessfulPurchase(order){
    let txtLoop = [];
    for(let i=0; i<localStorage.length; i++) {
        let a = [localStorage.key(i), localStorage.getItem(localStorage.key(i))];
        txtLoop[i] = a
    }
    $(document).ready ( function(){
        $.ajax({
            url: '../PHP/encode.php',
            type: 'POST',
            data: 'txt='+ txt,
            success: function(data){
            document.getElementById('purchaseID').value = data;

            document.getElementById('costID').value = total;


            document.querySelector('.form__butt').click();  
            
            localStorage.clear();
            window.location.reload()
            $('#herring').click(function(){
                document.getElementById('herringWrapper').style.display = 'none';               
            });
            },
            error: function(){
            console.log('ERROR');
            }
        })
     
    })
 

}



