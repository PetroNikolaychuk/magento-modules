<?php

namespace Nikolaychuk\AssetsWork\Model\Api\Data;

interface AssetInterface
{
	public function getId();
	public function setId();
	
	public function getName();
	public function setName();
	
	public function getAssetContent();
	public function setAssetContent();
	
}