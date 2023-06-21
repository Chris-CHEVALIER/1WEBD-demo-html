function confirmDelete (id) {
  let cards = document.getElementsByClassName('card')
  let fruits = ['Banane', 'Pomme', 'Cerise']
  let fruitsContainer = document.querySelector('#fruits')
  fruits.forEach(fruit => {
    fruitsContainer.innerHTML += fruit
  })

  /* if (confirm('Êtes-vous sûr de vouloir supprimer le Pokémon ?')) {
    window.location.href = `./delete.php?id=${id}`
  } */
}

function deployDescription (description, i) {
  /* console.log(description, i); */
  let pokemonDescription = document.querySelectorAll('.card-text')[i]
  let seeMoreButton = document.querySelectorAll('.text-link')[i]
  if (seeMoreButton.innerHTML === 'Voir plus') {
    pokemonDescription.innerHTML = description
    seeMoreButton.innerHTML = 'Voir moins'
  } else {
    pokemonDescription.innerHTML = description.substring(0, 50) + '...'
    seeMoreButton.innerHTML = 'Voir plus'
  }
}

/* console.log(pokemonDescription); */
/* let descriptions = []
pokemonDescriptions.forEach(pokemonDescription => {
  descriptions.push([
    pokemonDescription.innerHTML,
    pokemonDescription.innerHTML.substring(0, 50) + '...'
  ])
}) */

//console.log(descriptions)
