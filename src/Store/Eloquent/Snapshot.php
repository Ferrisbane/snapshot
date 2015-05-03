<?php namespace Michaeljennings\Snapshot\Store\Eloquent; 

use Illuminate\Database\Eloquent\Model;

class Snapshot extends Model {

    /**
     * The database table to be used by the model.
     *
     * @var string
     */
    protected $table = 'snapshots';

    /**
     * The fillable properties for the model.
     *
     * @var array
     */
    protected $fillable = ['file', 'line', 'server', 'post', 'get', 'files', 'cookies',
        'session', 'environment'];

    /**
     * The snapshot items relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('Michaeljennings\Snapshot\Store\Eloquent\Item');
    }

    /**
     * Return this id.
     *
     * @return string|integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get all of the snapshot's items.
     *
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

}