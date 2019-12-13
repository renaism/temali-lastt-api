<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'label', 'result', 'exp_pos', 'exp_neg'
    ];

    public function getAll()
    {
        return $this->all(['id', 'label', 'result']);
    }

    public function getResultAllTest()
    {
        return [
            'very_fit'      => $this->all(['id', 'result', 'exp_pos']),
            'fit'           => $this->all(['id', 'result', 'exp_pos']),
            'very_not_fit'  => $this->all(['id', 'result', 'exp_neg']),
            'not_fit'       => $this->all(['id', 'result', 'exp_neg'])
        ];
    }

    public function getResult($selectedOptions)
    {
        return [
            'very_fit'      => $this->select('id', 'result', 'exp_pos')->whereIn('id', $selectedOptions[1])->get(),
            'fit'           => $this->select('id', 'result', 'exp_pos')->whereIn('id', $selectedOptions[2])->get(),
            'not_fit'       => $this->select('id', 'result', 'exp_neg')->whereIn('id', $selectedOptions[3])->get(),
            'very_not_fit'  => $this->select('id', 'result', 'exp_neg')->whereIn('id', $selectedOptions[4])->get()
        ];
    }
}
