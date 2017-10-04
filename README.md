# instageek
Instagram web clone, built using Laravel. For educational purpose.

## Fitur
* Registrasi
* Login dan logout
* Edit profil
* Ubah password
* Upload foto profil
* Pencarian post
* Komentar
* Hashtag
* Like
* Follow/Unfollow
* Notifikasi
* Tagging Teman
* Geotagging
* Report content
* Blacklist comments

## Rancangan Database (Draft)
### User
* id int (PK)
* username (varchar)
* email (varchar)
* password (varchar)
* name (varchar)
* bio (text)
* website (varchar)
* phone (varchar)
* gender (enum: Male, Female)
* profile_picture (varchar)
* post_count (integer)
* follower_count (integer)
* following_count (integer)
* created_at
* updated_at

### Post
* id (integer)
* user_id (integer)
* photo (varchar)
* caption (text)
* location (TBD)
* like_count (integer)
* comment_count (integer)
* created_at
* updated_at

### Comment
* id
* user_id (integer)
* post_id (integer)
* comment (text)
* hide (boolean)
* created_at
* updated_at

### Hashtag
* hashtag (varchar)
* count (integer)
* created_at
* updated_at

### Like
* id
* post_id (integer)
* user_id (integer)
* created_at
* updated_at

### Follower
* id
* user_id (integer)
* follower_id (integer)

### Following
* id
* user_id (integer)
* following_id (integer)

### Post Tag
* id
* post_id (integer)
* user_id (integer)

### Report
* id
* post_id (integer)
* user_id (integer)
* reason (text)
* status (pending, approved, rejected)
* created_at
* updated_at

### Blacklist comment
* id
* user_id (integer) 
* keywords (text)
