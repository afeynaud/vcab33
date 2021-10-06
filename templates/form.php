
  <form class="myForm">
    <label for="customer_name">Nom </label>
    <input type="text" name="customer_name" id="customer_name" required>
  
    <label for="phone_number">Téléphone </label>
    <input type="tel" name="phone_number" id="phone_number">
  
    <label for="email_address">Email </label>
    <input type="email" name="email_address" id="email_address">
  
    <fieldset>
      <legend>Quel gamme de véhicule souhaitez-vous?</legend>
      <label> <input type="radio" name="taxi" id="taxi_car" required value="car"> ECO </label>
      <label> <input type="radio" name="taxi" id="taxi_van" required value="van"> VAN </label>
      <label> <input type="radio" name="taxi" id="taxi_tuk" required value="tuktuk"> VIP </label>
    </fieldset>
  
    <fieldset>
      <legend>Extras</legend>
      <label> <input type="checkbox" name="extras" id="extras_baby" value="baby"> Siège-auto (0 à 5 ans)</label>
      <label> <input type="checkbox" name="extras" id="extras_wheel" value="wheelchair"> Réhausseur (+5 ans)</label>
    </fieldset>
  
    <label for="pickup_time">Quand souhaitez-vous partir?</label>
    <input type="datetime-local" name="pickup_time" id="pickup_time" required>
  
    <label for="pickup_place">Lieu de prise en charge</label>
    <select name="pickup_place" id="pickup_place">
      <option value="" selected="selected">Sélectionnez un lieu</option>
      <option value="office" >Chez nous</option>
      <option value="town_hall" >Chez vous</option>
    </select>
  
    <label for="dropoff_place">Lieu de dépôt</label>
    <input type="text" name="dropoff_place" id="dropoff_place" required list="destinations">
  
  
    <label for="comments">Commentaires</label>
    <textarea name="comments" id="comments" maxlength="500"></textarea>
  
    <button>Réservez</button>
  
  </form>

