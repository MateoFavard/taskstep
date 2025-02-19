<?php

declare(strict_types=1);

namespace TaskStep\Logic\Model;

/**
 * Un projet de tâche.
 */
class Project
{
	private int $_id;
	private string $_title;

	/**
	 * L'identifiant du projet.
	 */
	public function id(): int { return $this->_id; }

	/**
	 * Le nom du projet.
	 */
	public function title(): string { return $this->_title; }

	/**
	 * Modifie le nom du projet.
	 * 
	 * @param $title Le nouveau nom.
	 */
	public function setTitle(string $title): Project
	{
		$this->_title = $title;
		return $this;
	}

	/**
	 * Crée un projet.
	 * 
	 * @param $id L'identifiant du projet. Il n'a pas besoin d'être indiqué
	 *            quand on en crée un nouveau.
	 */
	public function __construct(int $id = -1)
	{
		$this->_id = $id;
	}
}