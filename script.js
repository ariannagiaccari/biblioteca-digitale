fetch("books.json")
  .then((resp) => resp.json())
  .then((books) => {
    displayBooks(books);

    document
      .getElementById("search-input")
      .addEventListener("input", function () {
        // this function filters the books while the user types something in the search input
        const searchValue = this.value.toLocaleLowerCase(); //gets the input value in lower case
        const filteredBooks = books.filter(
          (book) =>
            book.title.toLocaleLowerCase().includes(searchValue) ||
            book.author.toLocaleLowerCase().includes(searchValue) ||
            book.genre.toLocaleLowerCase().includes(searchValue) // checking if the input value contains the title, autor or genre of the books
        );
        displayBooks(filteredBooks);
      });
  });

function displayBooks(books) {
  const booksList = document.querySelector(".books-list");
  booksList.innerHTML = ""; // to empty the list
  books.forEach((book) => {  // checks every element of the list
    const bookCard = `
                
        <div class="card">
          <div class="card-body">
            <h5> ${book.title}</h5>
            <p> author: ${book.author}</p>
            <p> genre: ${book.genre}</p>
          </div>
            <button class="book-btn" ${book.copies === 0 ? "disabled" : ""}>
        book
        </button>
        </div>     
         `;
    booksList.innerHTML += bookCard;
  });
}
