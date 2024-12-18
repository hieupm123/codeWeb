<?php


class Teacher
{
    public int $id;
    public ?string $name;
    public ?string $avatar;
    public ?string $description;
    public ?string $specialized;
    public ?string $degree;
    public ?string $updated;
    public ?string $created;

    public function __construct(
        int $id = 0,
        ?string $name = '',
        ?string $avatar = '',
        ?string $description = null,
        ?string $specialized = '',
        ?string $degree = '',
        ?string $updated = null,
        ?string $created = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->avatar = $avatar;
        $this->description = $description;
        $this->specialized = $specialized;
        $this->degree = $degree;
        $this->updated = $updated;
        $this->created = $created;
    }
}
