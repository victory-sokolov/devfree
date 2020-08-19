<?php

namespace App\Entity;

use App\Repository\ActiveOrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiveOrdersRepository::class)
 */
class ActiveOrders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $order_id;

    /**
     * @ORM\Column(type="date")
     */
    private $order_due_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $order_cost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getOrderId(): ?int
    {
        return $this->order_id;
    }

    public function setOrderId(int $order_id): self
    {
        $this->order_id = $order_id;

        return $this;
    }

    public function getOrderDueDate(): ?\DateTimeInterface
    {
        return $this->order_due_date;
    }

    public function setOrderDueDate(\DateTimeInterface $order_due_date): self
    {
        $this->order_due_date = $order_due_date;

        return $this;
    }

    public function getOrderCost(): ?string
    {
        return $this->order_cost;
    }

    public function setOrderCost(string $order_cost): self
    {
        $this->order_cost = $order_cost;

        return $this;
    }
}
