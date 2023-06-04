SELECT 
savebooks.id,
books.title,
books.nameAuthor,
books.cover,
books.file,
savebooks.created_at,
users.id as user

from savebooks
inner JOIN books on (books.id=savebooks.book)
inner JOIN users on (users.id=savebooks.user)