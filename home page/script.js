document.addEventListener('DOMContentLoaded', () => {
    const likeButtons = document.querySelectorAll('.like-btn');

    likeButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('liked');
        });
    });

    // Add event listener for the "Add New Card" button
    const addCardButton = document.getElementById('add-card-btn');
    addCardButton.addEventListener('click', () => {
        createNewCard(
            'https://via.placeholder.com/300x200', // Image URL
            'Newly Added Room',                   // Title
            'Downtown',                           // Location
            '9.5',                                // Rating
            'Excellent (50 reviews)',             // Reviews
            '1200'                                // Price
        );
    });
});
function createNewCard(imageUrl, title, location, rating, reviews, price) {
    const listingsSection = document.querySelector('.listings');

    // Create the card container
    const card = document.createElement('div');
    card.classList.add('listing-card');

    // Add the like button
    const likeButton = document.createElement('button');
    likeButton.classList.add('like-btn');
    likeButton.addEventListener('click', () => {
        likeButton.classList.toggle('liked');
    });
    card.appendChild(likeButton);

    // Add the image
    const img = document.createElement('img');
    img.src = imageUrl;
    img.alt = title;
    card.appendChild(img);

    // Add the link container
    const link = document.createElement('a');
    link.href = 'room details';

    // Add the title
    const h3 = document.createElement('h3');
    h3.textContent = title;
    link.appendChild(h3);

    // Add the location
    const locationParagraph = document.createElement('p');
    locationParagraph.textContent = location;
    link.appendChild(locationParagraph);

    // Add the rating
    const ratingParagraph = document.createElement('p');
    ratingParagraph.innerHTML = `<span class="rating">${rating}</span> ${reviews}`;
    link.appendChild(ratingParagraph);

    // Add the price
    const priceParagraph = document.createElement('p');
    priceParagraph.classList.add('price');
    priceParagraph.textContent = `${price}€`;
    link.appendChild(priceParagraph);

    card.appendChild(link);

    // Append the card to the listings section
    listingsSection.appendChild(card);
}