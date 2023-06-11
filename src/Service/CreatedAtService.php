<?php

use DateTimeImmutable;

class CreatedAtService
{
    public function createCreatedAt(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}