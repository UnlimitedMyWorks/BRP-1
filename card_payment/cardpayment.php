<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment checkout</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="checkout_form">
    <header class="card__header">
        <h3 class="card__title">Payment Details</h3>
        <svg xmlns="http://www.w3.org/2000/svg" class="card__logo" width="140" height="43" viewBox="0 0 175.7 53.9">
          <style>
            .visa
            {
              fill:#fff;
            }
          </style>
          <path class="visa" d="M61.9 53.1l8.9-52.2h14.2l-8.9 52.2zm65.8-50.9c-2.8-1.1-7.2-2.2-12.7-2.2-14.1 0-24 7.1-24 17.2-.1 7.5 7.1 11.7 12.5 14.2 5.5 2.6 7.4 4.2 7.4 6.5 0 3.5-4.4 5.1-8.5 5.1-5.7 0-8.7-.8-13.4-2.7l-2-.9-2 11.7c3.3 1.5 9.5 2.7 15.9 2.8 15 0 24.7-7 24.8-17.8.1-5.9-3.7-10.5-11.9-14.2-5-2.4-8-4-8-6.5 0-2.2 2.6-4.5 8.1-4.5 4.7-.1 8 .9 10.6 2l1.3.6 1.9-11.3M164.2 1h-11c-3.4 0-6 .9-7.5 4.3l-21.1 47.8h14.9s2.4-6.4 3-7.8h18.2c.4 1.8 1.7 7.8 1.7 7.8h13.2l-11.4-52.1m-17.5 33.6c1.2-3 5.7-14.6 5.7-14.6-.1.1 1.2-3 1.9-5l1 4.5s2.7 12.5 3.3 15.1h-11.9zm-96.7-33.7l-14 35.6-1.5-7.2c-2.5-8.3-10.6-17.4-19.6-21.9l12.7 45.7h15.1l22.4-52.2h-15.1"></path><path fill="#F7A600" d="M23.1.9h-22.9l-.2 1.1c17.9 4.3 29.7 14.8 34.6 27.3l-5-24c-.9-3.3-3.4-4.3-6.5-4.4"></path></svg>

      </header>
    <div class="card_number" id="card-container">
        <label for="card__number" style="color: #ffffff"><b>Card Number</b></label>
        <br>
        <br>
        <input type="tel" onkeypress="isInputNumber(event)" class="input" maxlength="16" id="card" placeholder="0000 0000 0000 0000">
        <div id="logo"></div>
    </div>
    <div class="card_grp">
        <label style="color: #ffffff"><b>Expiry Month</b></label>
        <br>
        <br>
      <div class="expiry_date">
        <select name="" class="expiry_input" data-mask="00"  placeholder="00" id="card__expiration__year">
            <option value="january">01</option>
            <option value="februrary">02</option>
            <option value="march">03</option>
            <option value="april">04</option>
            <option value="may">05</option>
            <option value="june">06</option>
            <option value="july">07</option>
            <option value="august">08</option>
            <option value="september">09</option>
            <option value="october">10</option>
            <option value="november">11</option>
            <option value="december">12</option>
          </select>
          <label style="color: #ffffff"><b>Expiry Year</b></label>
          <br>
          <br>
        <select name="" class="expiry_input" data-mask="00" placeholder="00" id="">
            <option value="2019">19</option>
            <option value="2020">20</option>
            <option value="2021">21</option>
            <option value="2022">22</option>
            <option value="2023">23</option>
            <option value="2024">24</option>
            <option value="2025">25</option>
            <option value="2026">26</option>
            <option value="2027">27</option>
            <option value="2028">28</option>
            <option value="2029">29</option>
            <option value="2030">30</option>
            <option value="2031">31</option>
            <option value="2032">32</option>
            <option value="2033">33</option>
            <option value="2034">34</option>
            <option value="2025">35</option>
            <option value="2036">36</option>
            <option value="2037">37</option>
            <option value="2038">38</option>
            <option value="2039">39</option>
            <option value="2040">40</option>
            <option value="2041">41</option>
            <option value="2042">42</option>
            <option value="2043">43</option>
            <option value="2044">44</option>
            <option value="2045">45</option>
            <option value="2046">46</option>
            <option value="2047">47</option>
            <option value="2048">48</option>
          </select>
      </div>
      <div class="cvc">
          <label style="color: #ffffff; margin-right: 5px"><b>CVV  </b></label>
          <br><br>
        <input type="text" class="cvc_input" data-mask="000" placeholder="000">
        <div class="cvc_img">
            ?
           <div class="img">
             <img src="cvv.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="btn">
      <b>
        PAY
      </b>
    </div>
</div>
<center>
	<a href="http://127.0.0.1//BRP/wallet.php">cancel</a>
</center>
<script>


    function isInputNumber(evt)
    {
      var ch = String.fromCharCode(evt.which);
      if(!(/[0-9]/.test(ch)))
      {
        evt.preventDefault();
      }
    }
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="card-validator.js"></script>
</body>
</html>
