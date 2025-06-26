import React, { useState } from "react";
import { Button } from "@/components/ui/button";

const careers = [
  { name: "Software Developer", description: "Build and maintain applications.", roadmap: "Learn coding, get internships, work on projects." },
  { name: "Data Scientist", description: "Analyze data for insights.", roadmap: "Learn Python, statistics, and machine learning." },
  { name: "UX Designer", description: "Design user-friendly interfaces.", roadmap: "Learn UI/UX principles, use Figma, build projects." },
];

export default function CareerGuidance() {
  const [selectedCareer, setSelectedCareer] = useState(null);

  return (
    <div className="p-8 max-w-2xl mx-auto text-center">
      <h1 className="text-2xl font-bold mb-4">Find Your Career Path</h1>
      {!selectedCareer ? (
        <div>
          <p className="mb-4">Select a career to explore:</p>
          {careers.map((career) => (
            <Button
              key={career.name}
              className="m-2"
              onClick={() => setSelectedCareer(career)}
            >
              {career.name}
            </Button>
          ))}
        </div>
      ) : (
        <div className="p-6 border rounded-lg shadow-lg">
          <h2 className="text-xl font-semibold">{selectedCareer.name}</h2>
          <p className="mt-2">{selectedCareer.description}</p>
          <h3 className="mt-4 font-bold">Roadmap:</h3>
          <p>{selectedCareer.roadmap}</p>
          <Button className="mt-4" onClick={() => setSelectedCareer(null)}>
            Back to Career Selection
          </Button>
        </div>
      )}
    </div>
  );
}
