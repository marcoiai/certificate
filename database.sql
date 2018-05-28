
create table entities(
	id serial not null primary key,
	name varchar not null,
	short_name varchar not null,
	address varchar,
	zip_code varchar,
	complement varchar,
	type char(1) not null,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp not null default now()::timestamp(0)
);

drop table if exists contracts;
create table contracts(
	id serial not null primary key,
	client_id int not null REFERENCES entities(id),
	order varchar not null,
	protocol varchar not null,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

drop table if exists certificates;
create table certificates(
	id serial not null primary key,
	client_id int not null REFERENCES entities(id),
	agent_id int not null REFERENCES entities(id),
	contract_id int not null REFERENCES contracts(id),
	consignee_id int not null REFERENCES entities(id),
	product_id int not null REFERENCES products(id),
	destiny_id int not null REFERENCES destinies(id),
	container varchar not null,
	booking varchar not null,
	date_of_inspection timestamp,
	declared_quantity int not null,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp,
	finished_at timestamp
);

drop table if exists certificates_locks;
create table certificates_locks(
	id serial not null primary key,
	nummber varchar not null,
    certificate_id integer not null REFERENCES certificates(id),
	image varchar,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

drop table if exists certificates_images;
create table certificates_images(
	id serial not null primary key,
	image varchar not null,
    certificate_id integer not null REFERENCES certificates(id),
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

create table products(
	id serial not null primary key,
    name varchar not null,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

create table packing(
	id serial not null primary key,
    name varchar not null,
	description varchar not null,
	client_id int not null REFERENCES entities(id),
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

create table labels(
	id serial not null primary key,
	name varchar not null,
	description varchar,
	date_production date,
	date_valid date,
	product_id integer not null REFERENCES products(id),
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

create table certificate_types(
	id serial not null primary key,
	name varchar not null,
	description varchar,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);

drop table if exists certificates_temperatures;
create table certificates_temperatures(
	id serial not null primary key,
	temperature varchar not null,
    certificate_id integer not null REFERENCES certificates(id),
	image varchar,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp
);
