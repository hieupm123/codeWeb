<?php
class AdminEntity
{
    public int $id;
    public ?string $login_id;
    public ?string $password;
    public int $actived_flag;
    public ?string $reset_password_token;
    public ?string $updated;
    public ?string $created;

    public function __construct(
        int $id = 1,
        ?string $login_id = null,
        ?string $password = null,
        int $actived_flag = 1,
        ?string $reset_password_token = null,
        ?string $updated = null,
        ?string $created = null
    ) {
        $this->id = $id;
        $this->login_id = $login_id;
        $this->password = $password;
        $this->actived_flag = $actived_flag;
        $this->reset_password_token = $reset_password_token;
        $this->updated = $updated;
        $this->created = $created;
    }
}
