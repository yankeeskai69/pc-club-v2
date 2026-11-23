<?php

namespace App\Application\Services;

use App\Models\Club;
use App\Repositories\AuthorRepository;
use Illuminate\Database\Eloquent\Collection;





final class AuthorService
{
    public function __construct(
        private readonly ClubRepository $authors,
    ) {}





    public function create(
        ClubStoreRequestDTO $dto,
    ): Club {
        return $this->authors->create(new ClubCreateDataDTO(
            birthday: $dto->birthday,
            firstName: $dto->firstName,
            lastName: $dto->lastName,
        ));
    }





    public function delete(
        ClubDestroyRequestDTO $dto,
    ): void {
        $club = $this->clubs->getByIDOrFail($dto->clubID);
        $this->clubs->delete($club);
    }





    /**
     * @return Collection<int, Club>
     */
    public function getList(): Collection
    {
        return $this->clubs->getList();
    }





    public function update(
        ClubUpdateRequestDTO $dto,
    ): Club {
        $club = $this->clubs->getByIdOrFail($dto->id);

        return $this->clubs->update(
            $clubs,
            new ClubUpdateDataDTO(
                birthday: $dto->birthday,
                firstName: $dto->firstName,
                lastName: $dto->lastName,
            ),
        );
    }





    public function view(
        AuthorShowRequestDTO $dto,
    ): Author {
        return $this->authors->getByIDOrFail(
            $dto->authorID,
        );
    }
};
