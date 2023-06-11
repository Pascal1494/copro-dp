<?php

use DateTimeImmutable;

class CreatedAtService
{
    public function createdAt(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}