const jsonString = '{"name": "La Plateforme_", "address": "8 rue d\'hozier", "city": "Marseille", "nb_staff": "11", "creation": "2019"}';
const key = 'city';

function jsonValueKey(jsonString, key) {
  const jsonObj = JSON.parse(jsonString);
  return jsonObj[key];
}
const value = jsonValueKey(jsonString, key);
console.log(value);
