<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="logo.png" type="image/png" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Get Membership</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <form action="#">

            <div class="row">

                <div class="col">
                    <h3 class="title">
                        Billing Address
                    </h3>

                    <div class="inputBox">
                        <label for="name">
                              Full Name:
                          </label>
                        <input type="text" id="name" 
                               placeholder="Enter your full name" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="email">
                              Email:
                          </label>
                        <input type="text" id="email" 
                               placeholder="Enter email address" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="address">
                              Address:
                          </label>
                        <input type="text" id="address" 
                               placeholder="Enter address" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="city">
                              City:
                          </label>
                        <input type="text" id="city" 
                               placeholder="Enter city" 
                               required>
                    </div>

                    <div class="flex">

                        <div class="inputBox">
                            <label for="state">
                                  State:
                              </label>
                            <input type="text" id="state" 
                                   placeholder="Enter state" 
                                   required>
                        </div>

                        <div class="inputBox">
                            <label for="zip">
                                  Zip Code:
                              </label>
                            <input type="number" id="zip" 
                                   placeholder="123 456" 
                                   required>
                        </div>

                    </div>

                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <label for="name">
                              Card Accepted:
                          </label>
                        <img  src= 
'data:image/png;base64,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'
                             alt="credit/debit card image">
                    </div>

                    <div class="inputBox">
                        <label for="cardName">
                              Name On Card:
                          </label>
                        <input type="text" id="cardName" 
                               placeholder="Enter card name" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="cardNum">
                              Credit Card Number:
                          </label>
                        <input type="text" id="cardNum" 
                               placeholder="1111-2222-3333-4444" 
                               maxlength="19" required>
                    </div>

                    <div class="inputBox">
                        <label for="">Exp Month:</label>
                        <select name="" id="">
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>


                    <div class="flex">
                        <div class="inputBox">
                            <label for="">Exp Year:</label>
                            <select name="" id="">
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>

                        <div class="inputBox">
                            <label for="cvv">CVV</label>
                            <input type="number" id="cvv" 
                                   placeholder="1234" required>
                        </div>
                    </div>

                </div>

            </div>

            <input style="
background: linear-gradient(to right, #f97316, #9a3412); border: none ; padding: 11.5px; border-radius: 5px; cursor: pointer;            
            " type="submit" value="Proceed to Checkout" 
                   class="submit_btn">
        </form>

    </div>
    <button>

    <a href="../index.php">
    
    
    
    Go Back
    </a>    
    
    </button>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    transition: all 0.2s linear;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 25px;
    background: #d6eef1;
}

.container form {
    width: 700px;
    padding: 20px;
    background: #fff;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .row .col {
    flex: 1 1 250px;
}

.col .title {
    font-size: 20px;
    color: rgb(237, 55, 23);
    padding-bottom: 5px;
}

.col .inputBox {
    margin: 15px 0;
}

.col .inputBox label {
    margin-bottom: 10px;
    display: block;
}

.col .inputBox input,
.col .inputBox select {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
}

.col .inputBox input:focus,
.col .inputBox select:focus {
    border: 1px solid #000;
}

.col .flex {
    display: flex;
    gap: 15px;
}

.col .flex .inputBox {
    flex: 1 1;
    margin-top: 5px;
}

.col .inputBox img {
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
}

.container form .submit_btn {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    background: rgb(1, 143, 34);
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
    letter-spacing: 1px;
}

.container form .submit_btn:hover {
    background: #3d17fb;
}

input::-webkit-inner-spin-button,
input::-webkit-outer-spin-button {
    display: none;
}

</style>

<script>
let cardNumInput = 
    document.querySelector('#cardNum')

cardNumInput.addEventListener('keyup', () => {
    let cNumber = cardNumInput.value
    cNumber = cNumber.replace(/\s/g, "")

    if (Number(cNumber)) {
        cNumber = cNumber.match(/.{1,4}/g)
        cNumber = cNumber.join(" ")
        cardNumInput.value = cNumber
    }
})


</script>



</body>

</html>

