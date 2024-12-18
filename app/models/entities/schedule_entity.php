<?php


class ScheduleEntity
{
    public int $id;
    public ?string $school_year;
    public int $subject_id;
    public int $teacher_id;
    public ?string $week_day;
    public ?string $lession;
    public ?string $notes;
    public ?string $updated;
    public ?string $created;

    public function __construct(
        int $id = 1,
        ?string $school_year = null,
        int $subject_id = 1,
        int $teacher_id = 1,
        ?string $week_day = null,
        ?string $lession = null,
        ?string $notes = null,
        ?string $updated = null,
        ?string $created = null
    ) {
        $this->id = $id;
        $this->school_year = $school_year;
        $this->subject_id = $subject_id;
        $this->teacher_id = $teacher_id;
        $this->week_day = $week_day;
        $this->lession = $lession;
        $this->notes = $notes;
        $this->updated = $updated;
        $this->created = $created;
    }
}
