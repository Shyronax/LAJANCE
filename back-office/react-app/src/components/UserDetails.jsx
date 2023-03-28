import { useNavigate } from "react-router-dom";
import { Button } from "./buttons/Button";
import { useState, useEffect } from "react";

export const UserDetails = ({ dataGET, goBack }) => {
	const navigate = useNavigate();

	// Déclaration des variables d'état
	const [nom, setNom] = useState("");
	const [prenom, setPrenom] = useState("");
	const [email, setEmail] = useState("");
	const [mdp, setMdp] = useState("");
	const [mdpConfirm, setMdpConfirm] = useState("");
	const [status, setStatus] = useState({});

	const isMdpTheSame = mdp === mdpConfirm;

	// Afficher les données de l'utilisateur
	useEffect(() => {
		setNom(dataGET.nom_utilisateur || "");
		setPrenom(dataGET.prenom_utilisateur || "");
		setEmail(dataGET.email_utilisateur || "");
	}, [
		dataGET.nom_utilisateur,
		dataGET.prenom_utilisateur,
		dataGET.email_utilisateur,
	]);

	// Fonction de soumission du formulaire
	const handleSubmit = async (e) => {
		e.preventDefault();
		if (isMdpTheSame) {
			const body = {
				nom,
				prenom,
				email,
			};

			if (dataGET.id_utilisateur == 1 && mdp) {
				body.mdp = mdp;
			}

			fetch(
				"/github/glimpse/back-office/back/api/utilisateur/" +
					dataGET.id_utilisateur,
				{
					method: "PUT",
					headers: {
						"Content-Type": "application/json",
					},
					body: JSON.stringify(body),
				}
			)
				.then((response) => response.json())
				.then((data) => {
					setStatus({
						nb: data.status,
						message: data.status_message,
					});
				});
		}
	};

	return (
		<form onSubmit={handleSubmit}>
			{status.nb ? (
				<div>
					<p className={status.nb == 1 ? "success" : "error"}>
						{status.message}
					</p>
				</div>
			) : (
				<div style={{ height: "1rem" }}></div>
			)}
			<label>
				nom:
				<input
					type="text"
					value={nom ? nom : dataGET.nom_utilisateur}
					onChange={(event) => setNom(event.target.value)}
				/>
			</label>
			<label>
				prenom:
				<input
					type="text"
					value={prenom ? prenom : dataGET.prenom_utilisateur}
					onChange={(event) => setPrenom(event.target.value)}
				/>
			</label>
			<label>
				email:
				<input
					type="email"
					value={email}
					onChange={(event) => setEmail(event.target.value)}
				/>
			</label>
			{dataGET.id_utilisateur == 1 && (
				<label>
					mdp:
					<input
						type="password"
						value={mdp}
						onChange={(event) => setMdp(event.target.value)}
					/>
					confirmation:
					<input
						{...(!isMdpTheSame && { className: "error" })}
						type="password"
						value={mdpConfirm}
						onChange={(event) => setMdpConfirm(event.target.value)}
					/>
					<div>
						{!isMdpTheSame && (
							<p className="error">Les mots de passe ne sont pas identiques.</p>
						)}
					</div>
				</label>
			)}
			{goBack && <a onClick={() => navigate(-1)}>Retour</a>}
			<Button type="submit">Modifier</Button>
		</form>
	);
};
