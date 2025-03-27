<?php

// --------------------------------
// Classe des planètes
// --------------------------------

class Planet
{

    private int $id;
    private string $imgUrl;
    private string $nom;
    private string $categorie;
    private int $diametre;
    private float $gravite;
    private string $lienNasa;

    //SUPPRESSION CONSTRUCT car en conflit avec PHP
    // public function __construct(int $id, string $nom, string $pays, string $ville, int $nbVisitesAn){
    //     $this->setId($id);
    //     $this->setNom($nom);
    //     $this->setPays($pays);
    //     $this->setVille($ville);
    //     $this->setNbVisitesAn($nbVisitesAn);
    // }

    //Fonction qui remplace le constructeur
    public function hydrate(string $nom, string $imgUrl, string $categorie, int $diametre, float $gravite, string $lienNasa)
    {
        $this->setNom($nom);
        $this->setImgUrl($imgUrl);
        $this->setCategorie($categorie);
        $this->setDiametre($diametre);
        $this->setGravite($gravite);
        $this->setLienNasa($lienNasa);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void
    {
        if ($this->validateNom($nom)) {
            $this->nom = $nom;
        } else {
            throw new Exception('Le nom donnée est trop long (plus de 7 caractères)');
        }
    }

    //Validateur du setter NOM
    public function validateNom(string $nom): bool
    {
        return strlen($nom) < 8 ; // La longueur du nom  ne doit pas dépasser 7 caractères
    }


    public function getImgUrl(): string
    {
        return $this->imgUrl;
    }
    public function setImgUrl(string $imgUrl): void
    {
        if ($this->validateImgUrl($imgUrl)) {
            $this->imgUrl = $imgUrl;
        } else {
            throw new Exception('L\'URL donnée n\'est pas une URL valide');
        }
    }

    public function validateImgUrl(string $imgUrl): bool
    {
        return filter_var($imgUrl, FILTER_VALIDATE_URL);      //Valide que l'adresse URL respect bien les spécifications de la RFC 3986.
    }


    public function getCategorie(): string
    {
        return $this->categorie;
    }
    public function setCategorie(string $categorie): void
    {
        if($this->validateCategorie($categorie)) {
            $this->categorie = $categorie;
        } else {
            throw new Exception('La catégorie doit être "Tellurique" ou "Gazeuse"');
        }
    }

    //Validateur du setter CATEGORIE : vérifie que la valeur rentrée est "tellurique" ou "gazeuse"
    public function validateCategorie(string $categorie): bool
    {
        return ($categorie == "Tellurique" || $categorie == "Gazeuse");
    }


    public function getDiametre(): int
    {
        return $this->diametre;
    }
    
    // Pour l'affichage formaté
    public function getDiametreFormatted(): string
    {
        return $this->diametre . ' km';
    }

    public function setDiametre(int $diametre): void
    {
        if($this->validateDiametre($diametre)) {
            $this->diametre = $diametre;
        } else {
            throw new Exception('Le diametre doit être un chiffre');
        }
    }

    //Validateur du setter DIAMETRE : vérifie que le diamètre est bien un nombre
    public function validateDiametre(int $diametre): bool
    {
        return $diametre != 0;
    }


    public function getGravite(): int|float
    {
        return $this->gravite;
    }
    public function getGraviteFormatted(): string
    {
        return $this->gravite . ' m/s²';
    }

    public function setGravite(float $gravite): void
    {
        if($this->validateGravite($gravite)) {
            $this->gravite = $gravite;
        } else {
            throw new Exception('La gravite doit être un chiffre');
        }
    }

    //Validateur du setter gravite
    public function validateGravite(float $gravite): bool
    {
        return $gravite != 0;
    }

    public function getLienNasa(): string
    {
        return $this->lienNasa;
    }
    public function setLienNasa(string $lienNasa): void
    {
        if($this->validateLienNasa($lienNasa)){
            $this->lienNasa = $lienNasa;
        }else{
            throw new Exception('L\'URL donnée n\'est pas une URL valide');
        }
    }

    public function validateLienNasa(string $lienNasa): bool
    {
        return filter_var($lienNasa, FILTER_VALIDATE_URL);  //Valide que l'adresse URL respect bien les spécifications de la RFC 3986.
    }


}
