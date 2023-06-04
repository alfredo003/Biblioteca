SELECT 
downloads.id,
books.title,
books.nameAuthor,
books.cover,
books.file,
downloads.created_at,
users.id as user

from downloads
inner JOIN books on (books.id=downloads.book)
inner JOIN users on (users.id=downloads.user)