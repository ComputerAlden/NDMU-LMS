const notificationsList = document.getElementById('notifications');

fetch('https://jsonplaceholder.typicode.com/posts?_limit=5')
  .then(response => response.json())
  .then(posts => {
    posts.forEach(post => {
      const li = document.createElement('li');
      li.classList.add('py-4', 'flex', 'items-center', 'justify-between');

      const div = document.createElement('div');
      div.classList.add('flex-1', 'truncate');

      const title = document.createElement('span');
      title.classList.add('font-medium', 'text-gray-900', 'truncate');
      title.textContent = post.title;

      const body = document.createElement('span');
      body.classList.add('ml-2', 'text-sm', 'text-gray-500', 'truncate');
      body.textContent = post.body;

      div.appendChild(title);
      div.appendChild(body);
      li.appendChild(div);

      notificationsList.appendChild(li);
    });
  });
