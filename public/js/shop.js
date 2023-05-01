document.addEventListener('DOMContentLoaded', function () {

    let cards = document.querySelectorAll('.card');
    let checkedCards = [];
    let addToCart = document.getElementById("add_cart_btn");
    let nbSelectedCards = document.getElementById("card_selection_nb");

    cards.forEach(function (card) {
        card.addEventListener('click', function (e) {
            card.classList.toggle('selected_card');

            let checkbox = card.querySelector('input[type="checkbox"]');
            let CardId = card.querySelector("input[type='hidden']").value;
            if (checkbox.checked) {
                if (checkedCards.includes(CardId)) {
                    checkedCards.splice(checkedCards.indexOf(CardId), 1);
                }
                checkbox.checked = false;
            }
            else {
                checkbox.checked = true;
                checkedCards.push(CardId);
            }

            let nbChecked = checkedCards.length;

            if (nbChecked > 0) {
                nbSelectedCards.innerText = nbChecked;
                addToCart.disabled = false
            } else {
                nbSelectedCards.innerText = "none";
                addToCart.disabled = true;
            }
        });
    });
    
    addToCart.addEventListener('click', () => {
        fetch('handlers/addToCart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(checkedCards)
        })
            .then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                }
                else {
                    console.log(response);
                }
            })
            .catch(error => console.error(error));
    });


});