<?php


class SubjectEntity
{
    public int $id;
    public ?string $name;
    public ?string $avatar;
    public ?string $description;
    public ?string $school_year;
    public ?string $updated;
    public ?string $created;

    public function __construct(
        int $id = 0,
        ?string $name = null,
        ?string $avatar = null,
        ?string $description = null,
        ?string $school_year = null,
        ?string $updated = null,
        ?string $created = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->avatar = $avatar;
        $this->description = $description;
        $this->school_year = $school_year;
        $this->updated = $updated;
        $this->created = $created;
    }
}
