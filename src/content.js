// const addButton = document.getElementById('addButton');
// const container = document.getElementById('content');

// function addContent() {
//     const newParagraph = document.createElement('div');
//     newParagraph.textContent = 'This is a dynamically added paragraph.';
//     container.appendChild(newParagraph);
//   }

  
// function addLink() {
//     const link = document.createElement('a');
//     link.href = 'https://example.com';
//     link.innerText = 'Link Name';
//     link.style.backgroundColor = 'yellow';
//     link.style.color = 'blue';
//     container.appendChild(link);
//   }
// addButton.addEventListener('click', addLink);

const addButton = document.getElementById('addButton');
const container = document.getElementById('contentContainer');

function addLink() {
  const linkName = prompt('Enter link name:');
  const linkURL = prompt('Enter link URL:');
  const backgroundColor = "yellow";
  const textColor = "black";
  const newLink = document.createElement('a');
  newLink.textContent = linkName;
  newLink.href = linkURL;
  newLink.style.backgroundColor = backgroundColor;
  newLink.style.color = textColor;

  container.appendChild(newLink);
}

addButton.addEventListener('click', addLink);
