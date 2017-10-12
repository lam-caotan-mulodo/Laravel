namespace App;

use Illuminate\Notification\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Autheticatable
{
	use Notifiable;

	protected $fillable = [
	'name','email','password',
	];

	protected $hidden = [
	'password','remember_token',
	];

	public function posts()
	{
		return $this->hasMany(Posts:class);		
	}

	public function publish()
	{
		$this->posts()->save($post)
	}
}