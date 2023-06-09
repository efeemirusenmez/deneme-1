<form action="index.php?sayfa=iletisim_post" method="post" class="login ozellogin">
    <p>
        <br>
    Name and Surename<input type="text" name="name" ><br>
    Mail <input type="email" name="email" placeholder="name@gmail.com"><br>
    Card Number <input type="text" name="username" placeholder="0000 0000 0000 0000"><br>
    Expiration Date and CVV <input type="text" name="surname"placeholder="12/12 777" ><br>
    
    <!--Women <input type="radio" name="cinsiyet" value="2" checked="on"> 
    Man <input type="radio" name="cinsiyet" value="1" > 
    <input type="submit" value="Send">
        <input type="reset" value="Sıfırla">-->

        <label>Hangi Nft:</label>
<select name="cinsiyet">
<option value="Monkey 1" name="cinsiyet">Monkey 1</option>
  <option value="Monkey 2" name="cinsiyet">Monkey 2</option>
  <option value="Monkey 3" name="cinsiyet">Monkey 3</option>
  <option value="Monkey 4" name="cinsiyet">Monkey 4</option>
  <option value="Monkey 1" name="cinsiyet">Baby Monkey 1</option>
  <option value="Monkey 2" name="cinsiyet">Baby Monkey 2</option>
  <option value="Monkey 3" name="cinsiyet">Baby Monkey 3</option>
  <option value="Monkey 4" name="cinsiyet">Baby Monkey 4</option>
  <input type="submit" value="Send">
        <input type="reset" value="Sıfırla">
</select>


        <?
        echo "Adınız $name ve  soyadınız $surname.";
        ?>
        </P>
 </form>
